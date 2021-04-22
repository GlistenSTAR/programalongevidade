<?php
namespace App\Http\Controllers\Utils;

use App\Http\AreasNegocio\CAD\Enums\ServiceStatusEnum;
use App\Http\AreasNegocio\CAD\Enums\SevenServicesEnum;
use App\Http\AreasNegocio\CAD\Models\LogSessao;
use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\AreasNegocio\CAD\Models\Produto;
use App\Http\AreasNegocio\CAD\Models\SessaoPDV;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapConsulta;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapLogOn;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapTabela;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Consulta;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\LogLogOn;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\TabelaST;
use App\Http\AreasNegocio\CAD\WSDL\StructType\ConsultaCadastroPF2;
use App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn;
use App\Http\AreasNegocio\CAD\WSDL\StructType\Tabela;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\AreasNegocio\CAN\IUserManagementCAN;
use App\Http\Requests\ProdutoRequest;
use App\Http\Requests\ServiceLogsRequest;
use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Parser;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class ServiceUtils
{
    private $serviceLogsCAN;
    private $produtoCAN;
    private $userManagementCAN;

    /**
     * ServiceUtils constructor.
     * @param IServiceLogsCAN $poServiceLogsCAN
     * @param IProdutoCAN $poProdutoCAN
     * @param IUserManagementCAN $poUserManagementCAN
     */
    public function __construct(IServiceLogsCAN $poServiceLogsCAN, IProdutoCAN $poProdutoCAN, IUserManagementCAN $poUserManagementCAN = null)
    {
        $this->serviceLogsCAN = $poServiceLogsCAN;
        $this->produtoCAN = $poProdutoCAN;
        $this->userManagementCAN = $poUserManagementCAN;
    }

    /**
     * LogOn Service Action
     * @param SessaoPDV $poSessaoPDV
     * @param bool $pbInvalidateCurrentSession
     * @return bool
     */
    public function logOnServiceAction(SessaoPDV &$poSessaoPDV, $pbInvalidateCurrentSession = true)
    {
        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));
        $loRequest = new ServiceLogsRequest();

        if ($pbInvalidateCurrentSession) {

            if (!empty($poSessaoPDV) && !empty($poSessaoPDV->LGV_CODIGO)) {

                $poSessaoPDV->LGV_ATIVO = false;
                $poSessaoPDV->LGV_DT_ALTERACAO = $loDate;
                $poSessaoPDV->LGV_DT_INATIVACAO = $loDate;
                $loRequest->setSessaoPDV($poSessaoPDV);

                $this->serviceLogsCAN->updateSessaoPDV($loRequest);

                Log::info("######ServiceUtils->logOnServiceAction ---- Current session invalidated");

            }

            $poSessaoPDV = new SessaoPDV();

            $poSessaoPDV->LGV_ATIVO = 1;
            $poSessaoPDV->LGV_DT_INCLUSAO = $loDate;
            $poSessaoPDV->LGV_SESSAO = "";
            $poSessaoPDV->LGV_TEMPO = 1;

            $loRequest->setSessaoPDV($poSessaoPDV);

            $this->serviceLogsCAN->insertSessaoPDV($loRequest);

        }

        $options = array(
            AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL").'PDVLogonV1.asmx?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapLogOn::get(),
        );

        $loControleTabela = $this->serviceLogsCAN->fetchControleTabela()->getObject();
        $liVersaoTabela = Config::get("app.SEVEN_VERSAO_TABELA");
        $liVersaoInterface = Config::get("app.SEVEN_VERSAO_INTERFACE");

        if (!empty($loControleTabela)) {
            $liVersaoTabela = $loControleTabela->LGV_VERSAO;
            $liVersaoInterface = $loControleTabela->LGV_INTERFACE;
        }

        $log = new LogLogOn($options);

        $lologSessao = $this->processlogSessaoDefaultState($loDate, SevenServicesEnum::LOGON, $poSessaoPDV);

        if ($log->LogOn(new LogOn($poSessaoPDV->LGV_CODIGO, $lsDate, 0, $lsDate, $liVersaoTabela, $liVersaoInterface, Config::get("app.SEVEN_SEU_SISTEMA"), Config::get("app.SEVEN_MASTER_PASSWORD"), Config::get("app.SEVEN_CTL_AP"))) !== false) {

            $serviceResult = $log->getResult();

            $lologSessao->LGV_LOG_COMANDO = json_encode($serviceResult->getLogOnResult());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;

            if (!empty($serviceResult->LogOnResult->DesvioFluxo) && $serviceResult->LogOnResult->DesvioFluxo == Config::get("app.SEVEN_DESVIO_CARGA_TABELA") && $pbInvalidateCurrentSession) {

                Log::info("######ServiceUtils->logOnServiceAction ---- Outdated Tabelas, trying to update");

                $this->tabelaServiceAction($poSessaoPDV);

            } else {

                Log::info("######ServiceUtils->logOnServiceAction ---- Tabelas OK, trying to update SessaoPDV");

                $poSessaoPDV->LGV_SESSAO = $serviceResult->LogOnResult->getSessao();
                $loRequest->setSessaoPDV($poSessaoPDV);

                $this->serviceLogsCAN->updateSessaoPDV($loRequest);
            }

            Log::info("######ServiceUtils->logOnServiceAction ---- LogOn Done");

            $loRequest->setLogSessao($lologSessao);
            $this->serviceLogsCAN->insertLogSessao($loRequest);

            return true;

        } else {

            $lologSessao->LGV_LOG_COMANDO = json_encode($log->getLastError());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

            $loRequest->setLogSessao($lologSessao);
            $this->serviceLogsCAN->insertLogSessao($loRequest);

            Log::error("######ServiceUtils->logOnServiceAction ---- " . json_encode($log->getLastError()));

            return false;
        }

        return false;

    }

    /**
     * Tabela Service Action
     * @param SessaoPDV|null $poSessaoPDV
     * @return bool
     */
    public function tabelaServiceAction(SessaoPDV $poSessaoPDV = null)
    {

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));
        $loRequest = new ServiceLogsRequest();

        if (empty($poSessaoPDV)) {
            $poSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();
        }

        $options = array(
            AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL").'PDVTabelaV1.asmx?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapTabela::get(),
        );

        $tabelaST = new TabelaST($options);

        $lologSessao = $this->processlogSessaoDefaultState($loDate, SevenServicesEnum::TABELA, $poSessaoPDV);

        $loControleTabela = $this->serviceLogsCAN->fetchControleTabela()->getObject();

        if ($tabelaST->Tabela(new Tabela($poSessaoPDV->LGV_CODIGO, $lsDate, 0, $lsDate, $loControleTabela->LGV_VERSAO, Config::get("app.SEVEN_VERSAO_INTERFACE"), Config::get("app.SEVEN_SEU_SISTEMA"), Config::get("app.SEVEN_MASTER_PASSWORD"), Config::get("app.SEVEN_CTL_AP"))) !== false) {

            $loServiceResult = $tabelaST->getResult();

            $lologSessao->LGV_LOG_COMANDO = json_encode($loServiceResult->getTabelaResult());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;

            $laProdutos = Parser::xml($loServiceResult->getTabelaResult()->ImagemTabela);
            $loProdutoRequest = new ProdutoRequest();

            if (!empty($loControleTabela) && !empty($laProdutos)) {

                $loControleTabela->LGV_VERSAO = $laProdutos['@VersaoTabela'];
                $loControleTabela->LGV_INTERFACE = $laProdutos['@VersaoInterface'];
                $loControleTabela->LGV_DT_ALTERACAO = $loDate;

                $loServiceLogsRequest = new ServiceLogsRequest();
                $loServiceLogsRequest->setControleTabela($loControleTabela);

                $this->serviceLogsCAN->updateControleTabela($loServiceLogsRequest);
            }

            $laProdutosAtivos = [];

            if (!empty($laProdutos)) {

                foreach ($laProdutos['Produtos']['Produto'] as $loProduto) {

                    $laProdutosAtivos[] = $loProduto['@EAN'];

                    $loProdutoRequest->setEan($loProduto['@EAN']);

                    $loProdutoResponse = $this->produtoCAN->fetchProdutosByEAN($loProdutoRequest);

                    if ($loProdutoResponse->getIsOperationSuccess() && !empty($loProdutoResponse->getObject())) {

                        $loLGVProduto = $loProdutoResponse->getObject();

                        $this->processProdutosFields($loProduto, $loLGVProduto);

                        $loProdutoRequest->setProduto($loLGVProduto);

                        $this->produtoCAN->updateProduto($loProdutoRequest);

                    } else {

                        $loLGVProduto = new Produto();

                        $loLGVProduto->LGV_PRODUTO_EAN = $loProduto['@EAN'];
                        $this->processProdutosFields($loProduto, $loLGVProduto);

                        $loProdutoRequest->setProduto($loLGVProduto);

                        $this->produtoCAN->insertProduto($loProdutoRequest);

                    }
                }
            }
            if (!empty($laProdutosAtivos)) {

                $loProdutoRequest->setProdutosAtivos($laProdutosAtivos);

                $loResponse = $this->produtoCAN->fetchAllProdutosInvalidos($loProdutoRequest);

                if ($loResponse->getisOperationSuccess()) {

                    foreach ($loResponse->getObjList() as $loProduto) {

                        $loProduto->LGV_STATUS = 0;

                        $loProdutoRequest->setProduto($loProduto);

                        $this->produtoCAN->updateProduto($loProdutoRequest);

                    }
                }
            }

            $loRequest->setLogSessao($lologSessao);
            $this->serviceLogsCAN->insertLogSessao($loRequest);

            Log::info("######ServiceUtils->tabelaServiceAction ---- Tabela's update OK, trying again the LogOn");

            return $this->logOnServiceAction($poSessaoPDV, false);

        } else {

            $lologSessao->LGV_LOG_COMANDO = json_encode($tabelaST->getLastError());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

            $loRequest->setLogSessao($lologSessao);
            $this->serviceLogsCAN->insertLogSessao($loRequest);

            Log::error("######ServiceUtils->tabelaServiceAction ---- " . json_encode($tabelaST->getLastError()));

        }

        return false;

    }

    /**
     * Login Service Action
     * @param Request $poRequest
     * @param Paciente $poPaciente
     * @param User $poUser
     * @return bool
     */
    public function loginServiceAction(Request $poRequest, Paciente &$poPaciente, User &$poUser) : bool {

        $response = new CommonObjectResponse();
        $lbServiceReturn = true;

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        if ($lbServiceReturn) {

            $options = array(
                AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL").'PDVConsultaCadastroPFV2.asmx?wsdl',
                AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapConsulta::get(),
            );

            $consulta = new Consulta($options);

            $lrBDData = (!empty($poRequest->input('dtNascimentoCadastro')) ? $poRequest->input('dtNascimentoCadastro') : $poRequest->input('dtNascimento'));

            $lsBirthDate = Carbon::createFromFormat('d/m/Y', $lrBDData)->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

            $loRequest = new ServiceLogsRequest();
            $lologSessao = $this->processlogSessaoDefaultState($loDate, SevenServicesEnum::CONSULTA_CADASTRO_PF, $loSessaoPDV);

            $lsCpf = !empty($poRequest->input('cpfCadastro')) ? StringUtils::clearSpecialCharacters($poRequest->input('cpfCadastro')) : StringUtils::clearSpecialCharacters($poRequest->input('Cpf'));

            if ($consulta->ConsultaCadastroPF2(new ConsultaCadastroPF2($loSessaoPDV->LGV_CODIGO, $lsDate, 0, $lsDate, 66, 0, 83, $lsCpf, $lsBirthDate, 0, Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), '', '', Config::get("app.SEVEN_DEFAULT_PASSWORD"))) !== false) {

                $lologSessao->LGV_LOG_COMANDO = json_encode($consulta->getResult());
                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
                $isServiceProcessedOk = true;

                if (($consulta->getResult()->getConsultaCadastroPF2Result()->getStatusServico() >= 40 && $consulta->getResult()->getConsultaCadastroPF2Result()->getStatusServico() <= 49) ||  $consulta->getResult()->getConsultaCadastroPF2Result()->getRetCode() == "Q076" ||  $consulta->getResult()->getConsultaCadastroPF2Result()->getRetCode() == "Q022") {

                    $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                    $isServiceProcessedOk = false;
                    Log::error("######ServiceUtils->loginServiceAction ---- " . json_encode($consulta->getResult()->getConsultaCadastroPF2Result()->getTextoInformativo()));
                }

                $loRequest->setLogSessao($lologSessao);
                $this->serviceLogsCAN->insertLogSessao($loRequest);

                if ($isServiceProcessedOk) {
                    $loUserRequest = new UserManagementRequest();

                    $lsCpf = $consulta->getResult()->getConsultaCadastroPF2Result()->getCPFConsumidor();

                    if (strlen($lsCpf) < 11) {

                        while (strlen($lsCpf) < 11) {
                            $lsCpf = "0".$lsCpf;
                        }
                    }

                    $loUserRequest->setCpf($lsCpf);
                    $loUserRequest->setDtNascimento(Carbon::createFromFormat(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"), $consulta->getResult()->getConsultaCadastroPF2Result()->getDataNascConsumidor(), Config::get("app.DEFAULT_TIMEZONE")));

                    $loResponse = $this->userManagementCAN->fetchUserByCPFAndDtNascimento($loUserRequest);

                    if ($loResponse->getisOperationSuccess() && !empty($loResponse->getObject())) {

                        if (!$loResponse->getObject()->LGV_USER_STATUS) {
                            return false;
                        }

                        $loUserRequest->setEmail($loResponse->getObject()->LGV_USER_EMAIL);
                        $loUserRequest->setPaciente($loResponse->getObject());

                        $poPaciente = $loResponse->getObject();

                        $loResponse = $this->userManagementCAN->registerAndLogin($loUserRequest);

                        $poUser = $loResponse->getObject();

                        return $loResponse->getisOperationSuccess();

                    } else if ($loResponse->getisOperationSuccess() && empty($loResponse->getObject())) {

                        $loPaciente = new Paciente();

                        $loPaciente->LGV_USER_NOME = $consulta->getResult()->getConsultaCadastroPF2Result()->NomeConsumidor;
                        $loPaciente->LGV_USER_DATA_NASCIMENTO = Carbon::createFromFormat(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"), $consulta->getResult()->getConsultaCadastroPF2Result()->getDataNascConsumidor(), Config::get("app.DEFAULT_TIMEZONE"));
                        $loPaciente->LGV_USER_EMAIL = $consulta->getResult()->getConsultaCadastroPF2Result()->getEmailConsumidor();
                        $loPaciente->LGV_USER_SENHA = Config::get('app.DEFAULT_SEVEN_PASSWORD');
                        $loPaciente->LGV_USER_ENDERECO = Config::get('app.DEFAULT_SEVEN_ADDRESS');
                        $loPaciente->LGV_USER_ENDERECO_NUMERO = Config::get('app.DEFAULT_SEVEN_ADDRESS_NUMBER');
                        $loPaciente->LGV_USER_ENDERECO_COMPLEMENTO = Config::get('app.DEFAULT_SEVEN_COMPLEMENT');
                        $loPaciente->LGV_USER_ENDERECO_BAIRRO = Config::get('app.DEFAULT_SEVEN_NEIGHBORHOOD');
                        $loPaciente->LGV_USER_ENDERECO_CIDADE = Config::get('app.DEFAULT_SEVEN_CITY');
                        $loPaciente->LGV_USER_ENDERECO_ESTADO = Config::get('app.DEFAULT_SEVEN_STATE');
                        $loPaciente->LGV_USER_ENDERECO_CEP = Config::get('app.DEFAULT_SEVEN_ZIPCODE');
                        $loPaciente->LGV_USER_TELEFONE_FIXO_DDD = $consulta->getResult()->getConsultaCadastroPF2Result()->getDDDFixo();
                        $loPaciente->LGV_USER_TELEFONE_FIXO_NUMERO = $consulta->getResult()->getConsultaCadastroPF2Result()->getFoneFixo();
                        $loPaciente->LGV_USER_TELEFONE_CELULAR_DDD = $consulta->getResult()->getConsultaCadastroPF2Result()->getDDDCelular();
                        $loPaciente->LGV_USER_TELEFONE_CELULAR_NUMERO = $consulta->getResult()->getConsultaCadastroPF2Result()->getFoneCelular();
                        $loPaciente->LGV_USER_DATA_CADASTRO = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
                        $loPaciente->LGV_USER_DATA_ULTIMA_ALTERACAO = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
                        $loPaciente->LGV_USER_STATUS = true;
                        $loPaciente->LGV_USER_CPF = $lsCpf;

                        $loUserRequest->setPaciente($loPaciente);

                        $loResponse = $this->userManagementCAN->insertUser($loUserRequest);

                        if ($loResponse->getisOperationSuccess()) {

                            $poPaciente = $loResponse->getObject();

                            $loResponse = $this->userManagementCAN->registerAndLogin($loUserRequest);

                            $poUser = $loResponse->getObject();

                            return $loResponse->getisOperationSuccess();
                        }
                    }
                }

                return $isServiceProcessedOk;//dd($consulta->getResult());

            } else {
                
                $lologSessao->LGV_LOG_COMANDO = json_encode($consulta->getLastError());
                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

                $loRequest->setLogSessao($lologSessao);
                $this->serviceLogsCAN->insertLogSessao($loRequest);

                Log::error("######ServiceUtils->loginServiceAction ---- " . json_encode($consulta->getLastError()));
            }
        }

        return false;
    }

    /**
     * Process logSessao Default State
     * @param Carbon $loDate
     * @param Number $piService
     * @return LogSessao
     */
    public function processlogSessaoDefaultState(Carbon $poDate, $piService, SessaoPDV $loSessaoPDV) : LogSessao {

        $lologSessao = new LogSessao();
        $lologSessao->LGV_LOG_CODIGO = $loSessaoPDV->LGV_CODIGO;
        $lologSessao->LGV_LOG_FUNCAO = $piService;
        $lologSessao->LGV_LOG_DT_INCLUSAO = $poDate;
        $lologSessao->LGV_LOG_COMANDO = "Erro na comunicação com a SevenPDV, Nenhum comando executado.";
        $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

        return $lologSessao;

    }

    /**
     * Process Produtos Fields
     * @param $loProduto
     * @param Produto $loLGVProduto
     */
    private function processProdutosFields($loProduto, Produto &$loLGVProduto): void
    {
        $loLGVProduto->LGV_PRODUTO_ADM = $loProduto['@ADM'];
        $loLGVProduto->LGV_PRODUTO_DESCRICAO = $loProduto['@DESC'];
        $loLGVProduto->LGV_PRODUTO_MARCA = $loProduto['@Marca'];
        $loLGVProduto->LGV_PRODUTO_CTL = $loProduto['@CTL'];
        $loLGVProduto->LGV_PRODUTO_IDP = $loProduto['@IDP'];
    }

}