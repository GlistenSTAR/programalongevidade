<?php
namespace App\Http\Controllers;

use App\Http\AreasNegocio\CAD\Enums\ServiceStatusEnum;
use App\Http\AreasNegocio\CAD\Enums\SevenServicesEnum;
use App\Http\AreasNegocio\CAD\Models\Medico;
use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\AreasNegocio\CAD\Models\Produto;
use App\Http\AreasNegocio\CAD\Models\Requisicao;
use App\Http\AreasNegocio\CAD\Models\SessaoPDV;
use App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapAceite;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapAdesao;
use App\Http\AreasNegocio\CAD\WSDL\ClassMapCadastroPF;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Aceite;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Adesao;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Cadastro;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Exclusao;
use App\Http\AreasNegocio\CAD\WSDL\ServiceType\Lista;
use App\Http\AreasNegocio\CAD\WSDL\StructType\AceiteTermo;
use App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd;
use App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2;
use App\Http\AreasNegocio\CAD\WSDL\StructType\ListaAceite;
use App\Http\AreasNegocio\CAD\WSDL\StructType\SolicitaExclusao;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\AreasNegocio\CAN\IUserManagementCAN;
use App\Http\Controllers\Utils\MedicoModelConverter;
use App\Http\Controllers\Utils\PacienteModelConverter;
use App\Http\Controllers\Utils\ServiceUtils;
use App\Http\Controllers\Utils\StringUtils;
use App\Http\Requests\ProdutoRequest;
use App\Http\Requests\ServiceLogsRequest;
use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;
use App\Mail\CadastroAdesaoMail;
use App\Mail\CadastroAtualizacaoMail;
use App\Mail\NovaAdesaoMail;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class UserManagementController extends Controller
{

    private $serviceLogsCAN;
    private $produtoCAN;
    private $userManagementCAN;
    private $serviceUtils;

    /**
     * UserManagementController constructor.
     */
    public function __construct(IServiceLogsCAN $poServiceLogsCAN, IUserManagementCAN $poUserManagementCAN, IProdutoCAN $poProdutoCAN)
    {
        $this->serviceLogsCAN = $poServiceLogsCAN;
        $this->userManagementCAN = $poUserManagementCAN;
        $this->produtoCAN = $poProdutoCAN;
        $this->serviceUtils = new ServiceUtils($poServiceLogsCAN, $poProdutoCAN);
    }

    /**
     * Insert Adesao Post Action
     * @param Request $poRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function insertAdesaoPostAction(Request $poRequest)
    {

        $loPaciente = session('paciente');
        $loMedico = new Medico();

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $response = new CommonObjectResponse();

        if (MedicoModelConverter::requestToModel($poRequest, $loMedico)) {
            $loUserManagementRequest = new UserManagementRequest();
            $loUserManagementRequest->setPaciente($loPaciente);
            $loUserManagementRequest->setMedico($loMedico);

            $loUserManagementRequest->setCrm($loMedico->LGV_MEDICO_CRM_NUMERO);
            $loUserManagementRequest->setUf($loMedico->LGV_MEDICO_CRM_UF);

            $loResponse = $this->userManagementCAN->fetchMedicoByCRM($loUserManagementRequest);

            if ($loResponse->getisOperationSuccess() && !empty($loResponse->getObject())) {

                $loUserManagementRequest->setMedico($loResponse->getObject());
                $loMedico = $loResponse->getObject();

            } else {

                $loResponse = $this->userManagementCAN->insertMedico($loUserManagementRequest);

                if ($loResponse->getisOperationSuccess()) {
                    $loMedico = $loResponse->getObject();
                } else {
                    throw new \Exception('Erro ao inserir o Médico na base');
                }
            }

            if ($loResponse->getisOperationSuccess()) {

                $loServiceRequest = new ServiceLogsRequest();
                $loResponse = $this->processRequisicao($poRequest, new Medico(), $loPaciente, $loServiceRequest);

                if ($loResponse->getisOperationSuccess()) {

                    $loProduto = $this->processProduto($poRequest);

                    $loUserManagementRequest->setProduto($loProduto);

                    $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

                    if ($this->processAdesaoService($loDate, $loSessaoPDV, $response, $loPaciente, $lsDate, $loMedico, $loProduto)) {

                        if (!empty(trim($loPaciente->LGV_USER_EMAIL))) {
                            Mail::to($loPaciente->LGV_USER_EMAIL)->bcc(Config::get("app.MAIL_DEFAULT_BCC"))->send(new NovaAdesaoMail($loServiceRequest, $loUserManagementRequest));
                        }

                        return redirect()->action('CommonController@processoOkNovaRequisicaoAction', ['medicamento' => $loProduto->LGV_PRODUTO_DESCRICAO]);
                    } else {
                        throw new \Exception('O serviço de adesão encontrou um erro e não pode concluir a transação, contate o suporte.');
                    }
                }
            }
        }
    }

    /**
     * Update Cadastro Post Action
     * @param Request $poRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCadastroPostAction(Request $poRequest)
    {

        $loPaciente = session('paciente');

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $response = new CommonObjectResponse();

        if (PacienteModelConverter::requestToModel($poRequest, $loPaciente)) {

            $this->validatePacienteState(session('paciente'), $loPaciente);

            $loUserManagementRequest = new UserManagementRequest();
            $loUserManagementRequest->setPaciente($loPaciente);

            $loResponse = $this->userManagementCAN->updatetUser($loUserManagementRequest);

            if ($loResponse->getisOperationSuccess()) {

                $loServiceRequest = new ServiceLogsRequest();
                $loResponse = $this->processRequisicao($poRequest, new Medico(), $loPaciente, $loServiceRequest);

                if ($loResponse->getisOperationSuccess()) {

                    $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

                    if ($this->processCadastroService($loSessaoPDV, $response, $loPaciente, $loDate, $lsDate)) {

                        if (!empty(trim($loPaciente->LGV_USER_EMAIL))) {
                            Mail::to($loPaciente->LGV_USER_EMAIL)->bcc(Config::get("app.MAIL_DEFAULT_BCC"))->send(new CadastroAtualizacaoMail($loServiceRequest, $loUserManagementRequest));
                        }

                        return redirect()->action('CommonController@alteraDadosOkAction');
                    }
                }
            }
        }
    }

    /**
     * Cadastro Adesao Post Action
     * @param Request $poRequest
     * @return string
     */
    public function cadastroAdesaoPostAction(Request $poRequest)
    {

        $loPaciente = new Paciente();
        $loMedico = new Medico();

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $response = new CommonObjectResponse();

        if (PacienteModelConverter::requestToModel($poRequest, $loPaciente) && MedicoModelConverter::requestToModel($poRequest, $loMedico)) {

            $loUserManagementRequest = new UserManagementRequest();
            $loUserManagementRequest->setMedico($loMedico);
            $loUserManagementRequest->setPaciente($loPaciente);

            $loUserManagementRequest->setCrm($loMedico->LGV_MEDICO_CRM_NUMERO);
            $loUserManagementRequest->setUf($loMedico->LGV_MEDICO_CRM_UF);

            $loResponse = $this->userManagementCAN->fetchMedicoByCRM($loUserManagementRequest);

            if ($loResponse->getisOperationSuccess() && !empty($loResponse->getObject())) {

                $loUserManagementRequest->setMedico($loResponse->getObject());
                $loMedico = $loResponse->getObject();

            } else {

                $loResponse = $this->userManagementCAN->insertMedico($loUserManagementRequest);

                if ($loResponse->getisOperationSuccess()) {
                    $loMedico = $loResponse->getObject();
                } else {
                    throw new \Exception('Erro ao inserir o Médico na base');
                }
            }

            $loUserManagementRequest->setCpf($loPaciente->LGV_USER_CPF);
            $loResponse = $this->userManagementCAN->fetchUserByCPF($loUserManagementRequest);

            if ($loResponse->getisOperationSuccess() && !empty($loResponse->getObject())) {

                throw new \Exception('Verificamos que o CPF que você informou no processo de cadastro (CPF informado: '.$loUserManagementRequest->getCpf().') já está sendo utilizado. Tente efetuar novamente o seu cadastro nos informando um CPF diferente, ou então acesse a página de login e nos informe, além do seu CPF, também a sua data de nascimento.');

            } else {

                $loResponse = $this->userManagementCAN->insertUser($loUserManagementRequest);

                if ($loResponse->getisOperationSuccess()) {
                    $loPaciente = $loResponse->getObject();
                } else {
                    throw new \Exception('O serviço de cadastro encontrou um erro e não pode concluir a transação, contate o suporte.');
                }
            }

            $loServiceRequest = new ServiceLogsRequest();
            $loResponse = $this->processRequisicao($poRequest, $loMedico, $loPaciente, $loServiceRequest);

            $loProduto = $this->processProduto($poRequest);
            $loUserManagementRequest->setProduto($loProduto);

            if ($loResponse->getisOperationSuccess()) {

                $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();
                $lnNrCentral = 0;

                if ($this->processAdesaoService($loDate, $loSessaoPDV, $response, $loPaciente, $lsDate, $loMedico, $loProduto, $lnNrCentral)) {

                    if ($this->processCadastroService($loSessaoPDV, $response, $loPaciente, $loDate, $lsDate, $lnNrCentral)) {

                        $loUserManagementResponse = $this->userManagementCAN->registerAndLogin($loUserManagementRequest);

                        if ($loUserManagementResponse->getisOperationSuccess()) {

                            $poRequest->attributes->add(['cpfCadastro' => StringUtils::clearSpecialCharacters($loPaciente->LGV_USER_CPF), 'dtNascimento' => $loPaciente->LGV_USER_DATA_NASCIMENTO->format(Config::get("app.DEFAULT_DATE_FORMAT"))]);

                            $loServiceUtils = new ServiceUtils($this->serviceLogsCAN, $this->produtoCAN, $this->userManagementCAN);

                            $loPaciente = new Paciente();
                            $loUser = new User();

                            if ($loServiceUtils->loginServiceAction($poRequest, $loPaciente, $loUser)) {

                                if (Auth::attempt(['email' => (!empty($loPaciente->LGV_USER_EMAIL)) ? $loPaciente->LGV_USER_EMAIL : $loPaciente->LGV_USER_CPF, 'password' => Config::get("app.SEVEN_DEFAULT_PASSWORD")], true)) {

                                    if (!empty(trim($loPaciente->LGV_USER_EMAIL))) {
                                        Mail::to($loPaciente->LGV_USER_EMAIL)->bcc(Config::get("app.MAIL_DEFAULT_BCC"))->send(new CadastroAdesaoMail($loServiceRequest, $loUserManagementRequest));
                                    }

                                    session(['paciente' => $loPaciente]);
                                    session(['authUser' => $loUser]);
                                    return redirect()->action('CommonController@posCadastroAdesaoOKAction');
                                }
                            }

                        } else {
                            throw new \Exception('Não foi possível autenticar seu usuário no sistema, contate o suporte.');
                        }
                    } else {
                        throw new \Exception('O serviço de adesão encontrou um erro e não pode concluir a transação, contate o suporte.');
                    }
                } else {
                    throw new \Exception('O serviço de cadastro encontrou um erro e não pode concluir a transação, contate o suporte.');
                }
            }
        }

        return "erro";
    }

    /**
     * @param Request $request
     * @return CommonObjectResponse
     */
    public function AcceptUserTerms(Request $request) {

        $response = new CommonObjectResponse();

        $loPaciente = session('paciente');

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $options = array(
            AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_HOMOLOG_URL").'AceiteTermoLGPDV1.asmx?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapAceite::get(),
        );

        $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->serviceUtils->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        $lologSessao = $this->serviceUtils->processlogSessaoDefaultState($loDate, SevenServicesEnum::ACEITE_TERMO, $loSessaoPDV);

        $aceite = new Aceite($options);
        if ($aceite->AceiteTermo(new AceiteTermo($loSessaoPDV->LGV_CODIGO, $lsDate,69, $lsDate, 66, 0, 83, intval($loPaciente->LGV_USER_CPF), intval($loPaciente->LGV_USER_TELEFONE_CELULAR_DDD), intval($loPaciente->LGV_USER_TELEFONE_CELULAR_NUMERO), Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), "abcdefg", "ADES_URA", "01", "Site", "form-012345678", $request->ip()))) {

            $lologSessao->LGV_LOG_COMANDO = json_encode($aceite->getResult());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
            $isServiceProcessedOk = true;
            $response->setIsOperationSuccess(true);
            $loPaciente->LGV_USER_LGPD = false;

            if (($aceite->getResult()->getAceiteTermoResult()->getStatusServico() >= 40 && $aceite->getResult()->getAceiteTermoResult()->getStatusServico() <= 49) ||  $aceite->getResult()->getAceiteTermoResult()->getRetCode() == "Q076" ||  $aceite->getResult()->getAceiteTermoResult()->getRetCode() == "Q022") {

                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                $isServiceProcessedOk = false;
                $response->setIsOperationSuccess(false);
                Log::error("######ServiceUtils->AcceptUserTerms ---- " . json_encode($aceite->getResult()->getAceiteTermoResult()->getTextoInformativo()));

            } else {

                $loPaciente->LGV_USER_LGPD = true;
                $loPaciente->LGV_USER_LGPD_DATA = Carbon::now("America/Sao_Paulo");

                $request = new UserManagementRequest();
                $request->setPaciente($loPaciente);

                $response = $this->userManagementCAN->updatetUser($request);

                if (!$response->getisOperationSuccess()) {
                    Log::error("ERRO AO ATUALIZAR O PACIENTE LGPD ACEITE -----> ".json_encode($loPaciente));
                } else {
                    session(['paciente' => $loPaciente]);
                }

            }
        } else {
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
            $isServiceProcessedOk = false;
            $response->setIsOperationSuccess(false);
            Log::error("######ServiceUtils->AcceptUserTerms ----> WSDL did not respond");
        }

        return $response;
    }

    /**
     * @param Request $request
     * @return CommonObjectResponse
     */
    public function ListAcceptUserTerms(Request $request) {

        $response = new CommonObjectResponse();

        $loPaciente = session('paciente');

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $options = array(
            AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL").'ListaAceiteConsumidor.asmx?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapAceite::get(),
        );

        $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->serviceUtils->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        $lologSessao = $this->serviceUtils->processlogSessaoDefaultState($loDate, SevenServicesEnum::LISTA_ACEITE, $loSessaoPDV);

        $listaAceite = new Lista($options);
        if ($listaAceite->ListaAceite(new ListaAceite($loSessaoPDV->LGV_CODIGO, $lsDate,0, $lsDate, 66, 0, 83, $loPaciente->LGV_USER_CPF, Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), "", ""))) {

            $lologSessao->LGV_LOG_COMANDO = json_encode($listaAceite->getResult());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
            $isServiceProcessedOk = true;

            if (($listaAceite->getResult()->getAceiteTermoResult()->getStatusServico() >= 40 && $listaAceite->getResult()->getListaAceiteResult()->getStatusServico() <= 49) ||  $listaAceite->getResult()->getListaAceiteResult()->getRetCode() == "Q076" ||  $listaAceite->getResult()->getListaAceiteResult()->getRetCode() == "Q022") {

                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                $isServiceProcessedOk = false;
                Log::error("######ServiceUtils->ListAcceptUserTerms ---- " . json_encode($listaAceite->getResult()->getListaAceiteResult()->getTextoInformativo()));
            }
        }

        return $response;
    }

    /**
     * @param Request $request
     * @return CommonObjectResponse
     */
    public function ExcludeUserTerms(Request $request) {

        $response = new CommonObjectResponse();

        $loPaciente = session('paciente');

        $loDate = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $lsDate = $loDate->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

        $options = array(
            AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL").'SolicitaExclusaoConsumidorV1.asmx?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapAceite::get(),
        );

        $loSessaoPDV = $this->serviceLogsCAN->fetchLastSessaoPDV()->getObject();

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->serviceUtils->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        $lologSessao = $this->serviceUtils->processlogSessaoDefaultState($loDate, SevenServicesEnum::EXCLUSAO_CONSUMIDOR, $loSessaoPDV);

        $exclusao = new Exclusao($options);
        if ($exclusao->SolicitaExclusao(new SolicitaExclusao(intval($loSessaoPDV->LGV_CODIGO), $lsDate,69, $lsDate, 66, 0, 83, intval($loPaciente->LGV_USER_CPF), 0, Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), "abcdefg", "ADES_URA", "Site"))) {

            $lologSessao->LGV_LOG_COMANDO = json_encode($exclusao->getResult());
            $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
            $isServiceProcessedOk = true;

            if (($exclusao->getResult()->SolicitaExclusaoResult->StatusServico >= 40 && $exclusao->getResult()->SolicitaExclusaoResult->StatusServico <= 49) ||  $exclusao->getResult()->SolicitaExclusaoResult->RetCode == "Q076" ||  $exclusao->getResult()->SolicitaExclusaoResult->RetCode == "Q022") {

                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                $isServiceProcessedOk = false;
                Log::error("######ServiceUtils->ExcludeUserTerms ---- " . json_encode($exclusao->getResult()->SolicitaExclusaoResult->TextoInformativo));
            } else {
                $loPaciente->LGV_USER_LGPD = false;
                $loPaciente->LGV_USER_STATUS = false;
                $loPaciente->LGV_USER_LGPD_ANONIMIZACAO_DATA = Carbon::now("America/Sao_Paulo");

                $request = new UserManagementRequest();
                $request->setPaciente($loPaciente);

                $response = $this->userManagementCAN->updatetUser($request);

                if (!$response->getisOperationSuccess()) {
                    Log::error("ERRO AO REALIZAR ANONIMIZACAO -----> ".json_encode($loPaciente));
                } else {
                    Auth::logout();
                }
            }
        }

        return $response;
    }

    /**
     * Process Cadastro Service
     * @param SessaoPDV $loSessaoPDV
     * @param CommonObjectResponse $response
     * @param Paciente $loPaciente
     * @param Carbon $loDate
     * @param $lsDate
     * @return bool
     */
    private function processCadastroService(SessaoPDV $loSessaoPDV, CommonObjectResponse $response, Paciente $loPaciente, Carbon $loDate, $lsDate, $pnNrCentral = 0): bool
    {
        $lbServiceReturn = true;

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->serviceUtils->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        if ($lbServiceReturn) {

            $options = array(
                AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL") . 'PDVCadastroPFV2.asmx?wsdl',
                AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapCadastroPF::get(),
            );

            $cadastro = new Cadastro($options);

            if (!$loPaciente->LGV_USER_DATA_NASCIMENTO instanceof Carbon) {
                $loPaciente->LGV_USER_DATA_NASCIMENTO = Carbon::createFromFormat(Config::get("app.DEFAULT_DB_DATE_TIME_FORMAT"), $loPaciente->LGV_USER_DATA_NASCIMENTO);
            }


            $lsBirthDate = $loPaciente->LGV_USER_DATA_NASCIMENTO->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

            $loRequest = new ServiceLogsRequest();
            $lologSessao = $this->serviceUtils->processlogSessaoDefaultState($loDate, SevenServicesEnum::CADASTRO_PF, $loSessaoPDV);

            if ($cadastro->CadastroPF2(new CadastroPF2($loSessaoPDV->LGV_CODIGO, $lsDate, $pnNrCentral, $lsDate, 66, 0, 83, $loPaciente->LGV_USER_CPF, $lsBirthDate, 77, $loPaciente->LGV_USER_TELEFONE_CELULAR_DDD, $loPaciente->LGV_USER_TELEFONE_CELULAR_NUMERO, $loPaciente->LGV_USER_TELEFONE_FIXO_DDD, $loPaciente->LGV_USER_TELEFONE_FIXO_NUMERO, 83, 83, 83, 83, 83, 78, Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), '', '', $loPaciente->LGV_USER_NOME, Config::get("app.DEFAULT_SEVEN_ZIPCODE"), Config::get("app.DEFAULT_SEVEN_STATE"), Config::get("app.DEFAULT_SEVEN_CITY"), Config::get("app.DEFAULT_SEVEN_NEIGHBORHOOD"), Config::get("app.DEFAULT_SEVEN_ADDRESS_TYPE"), Config::get("app.DEFAULT_SEVEN_ADDRESS"), Config::get("app.DEFAULT_SEVEN_ADDRESS_NUMBER"), Config::get("app.DEFAULT_SEVEN_COMPLEMENT"), $loPaciente->LGV_USER_EMAIL, Config::get("app.SEVEN_DEFAULT_PASSWORD"), '', '005')) !== false) {

                $lologSessao->LGV_LOG_COMANDO = json_encode($cadastro->getResult());
                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
                $isServiceProcessedOk = true;

                if ($cadastro->getResult()->getCadastroPF2Result()->getStatusServico() >= 40 && $cadastro->getResult()->getCadastroPF2Result()->getStatusServico() <= 49) {

                    $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                    Log::error("######UserManagementController->processCadastroService ---- " . json_encode($cadastro->getResult()->getCadastroPF2Result()->getTextoInformativo()));
                    $loRequest->setLogSessao($lologSessao);
                    $this->serviceLogsCAN->insertLogSessao($loRequest);

                    if ($cadastro->getResult()->getCadastroPF2Result()->getTextoInformativo() == "TD14 - Email já cadastrado") {
                        throw new \Exception('Verificamos que o endereço de e-mail que você informou no processo de cadastro (Endereço de e-mail informado:  '.$loPaciente->LGV_USER_EMAIL.') já está sendo utilizado. Tente efetuar novamente o seu cadastro nos informando um endereço de e-mail diferente, ou então acesse a página de login e nos informe, além do SEU CPF, também a sua data de nascimento.');
                    }

                    throw new \Exception('O serviço de cadastro encontrou um erro e não pode concluir a transação, contate o suporte.'.$cadastro->getResult()->getCadastroPF2Result()->getTextoInformativo());
                }

                $loRequest->setLogSessao($lologSessao);
                $this->serviceLogsCAN->insertLogSessao($loRequest);

                return $isServiceProcessedOk;//dd($consulta->getResult());

            } else {

                $lologSessao->LGV_LOG_COMANDO = json_encode($cadastro->getLastError());
                $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

                $loRequest->setLogSessao($lologSessao);
                $this->serviceLogsCAN->insertLogSessao($loRequest);

                Log::error("######UserManagementController->processCadastroService ---- " . json_encode($cadastro->getLastError()));

                return false;//dd($consulta->getResult());
            }
        }

        Log::error("######UserManagementController->processCadastroService ---- Não foi possível processar a sessão para essa requisição");

        return false;
    }

    /**
     * Process Adesao Service
     * @param Request $poRequest
     * @param Carbon $loDate
     * @param SessaoPDV $loSessaoPDV
     * @param CommonObjectResponse $response
     * @param Paciente $loPaciente
     * @param $lsDate
     * @param Medico $loMedico
     * @param Number &$pnNrCentral
     * @return bool
     */
    private function processAdesaoService(Carbon $loDate, SessaoPDV $loSessaoPDV, CommonObjectResponse $response, Paciente $loPaciente, $lsDate, Medico $loMedico, Produto $poProduto, &$pnNrCentral = 0): bool
    {
        $lbServiceReturn = true;

        if (empty($loSessaoPDV)) {

            $loSessaoPDV = new SessaoPDV();
            $lbServiceReturn = $this->serviceUtils->logOnServiceAction($loSessaoPDV, true);
            $response->setIsOperationSuccess(false);
            $response->setMessages("Ocorreu um erro na comunicação com a SevenPDV, contate o suporte.");
        }

        if ($lbServiceReturn) {

            if (!empty($poProduto)) {

                $options = array(
                    AbstractSoapClientBase::WSDL_URL => Config::get("app.SEVEN_BASE_URL") . 'PDVAdesaoPrdV1.asmx?wsdl',
                    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMapAdesao::get(),
                );

                $adesao = new Adesao($options);

                $loRequest = new ServiceLogsRequest();
                $lologSessao = $this->serviceUtils->processlogSessaoDefaultState($loDate, SevenServicesEnum::ADESAO_PRODUTO, $loSessaoPDV);

                $lsBirthDate = Carbon::createFromFormat(Config::get("app.DEFAULT_DB_DATE_TIME_FORMAT"), $loPaciente->LGV_USER_DATA_NASCIMENTO)->format(Config::get("app.DEFAULT_WSDL_DATE_TIME_FORMAT"));

                if ($adesao->AdesaoPrd(new AdesaoPrd($loSessaoPDV->LGV_CODIGO, $lsDate, 0, $lsDate, 66, 0, 83, $loPaciente->LGV_USER_CPF, $lsBirthDate, 0, $poProduto->LGV_PRODUTO_EAN, Config::get("app.SEVEN_SEU_SISTEMA"), $loSessaoPDV->LGV_SESSAO, Config::get("app.SEVEN_CTL_AP"), Config::get("app.SEVEN_DEFAULT_ADMINISTRADORA"), '', '', Config::get("app.SEVEN_DEFAULT_PASSWORD"), '', $loMedico->LGV_MEDICO_CRM_NUMERO, $loMedico->LGV_MEDICO_CRM_UF, $loMedico->LGV_MEDICO_NOME, new ArrayOfQuestao())) !== false) {

                    $lologSessao->LGV_LOG_COMANDO = json_encode($adesao->getResult());
                    $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_OK;
                    $isServiceProcessedOk = true;

                    if ($adesao->getResult()->getAdesaoPrdResult()->getStatusServico() >= 40 && $adesao->getResult()->getAdesaoPrdResult()->getStatusServico() <= 49) {

                        $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;
                        Log::error("######UserManagementController->processAdesaoService ---- " . json_encode($adesao->getResult()->getAdesaoPrdResult()->getTextoInformativo()));
                        $pnNrCentral = $adesao->getResult()->getAdesaoPrdResult()->getNrCentral();
                        $loRequest->setLogSessao($lologSessao);
                        $this->serviceLogsCAN->insertLogSessao($loRequest);
                        throw new \Exception('O serviço de adesão encontrou um erro e não pode concluir a transação, contate o suporte.
                        '.$adesao->getResult()->getAdesaoPrdResult()->getTextoInformativo());
                    }

                    $pnNrCentral = $adesao->getResult()->getAdesaoPrdResult()->getNrCentral();
                    $loRequest->setLogSessao($lologSessao);
                    $this->serviceLogsCAN->insertLogSessao($loRequest);

                    return $isServiceProcessedOk;//dd($consulta->getResult());

                } else {

                    $lologSessao->LGV_LOG_COMANDO = json_encode($adesao->getLastError());
                    $lologSessao->LGV_LOG_TIPO = ServiceStatusEnum::STATUS_ERRO;

                    $loRequest->setLogSessao($lologSessao);
                    $this->serviceLogsCAN->insertLogSessao($loRequest);

                    Log::error("######UserManagementController->processAdesaoService ---- " . json_encode($adesao->getLastError()));

                    return false;//dd($consulta->getResult());
                }

            } else {

                Log::error("######UserManagementController->processAdesaoService ---- O Produto informado não foi encontrado na base de dados ");
                return false;
            }
        }

        Log::error("######UserManagementController->processAdesaoService ---- Não foi possível processar a sessão para essa requisição");

        return false;
    }

    /**
     * @param Request $poRequest
     * @param $loMedico
     * @param $loPaciente
     * @param ServiceLogsRequest $poServiceLogsRequest
     * @return CommonObjectResponse
     */
    private function processRequisicao(Request $poRequest, $loMedico, $loPaciente, ServiceLogsRequest &$poServiceLogsRequest): CommonObjectResponse
    {
        $loRequisicao = new Requisicao();
        $loRequisicao->LGV_REQUISICAO_DATA = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
        $loRequisicao->LGV_REQUISICAO_ID_MEDICO = $loMedico->LGV_MEDICO_ID;
        $loRequisicao->LGV_REQUISICAO_ID_PACIENTE = $loPaciente->LGV_USER_ID;
        $loRequisicao->LGV_REQUISICAO_ID_PRODUTO = (!empty($poRequest->input('Apresentacao')) ? $poRequest->input('Apresentacao') : '0');
        $loRequisicao->LGV_REQUISICAO_STATUS = 1;

        $poServiceLogsRequest->setRequisicao($loRequisicao);

        return $this->serviceLogsCAN->insertRequisicaoLog($poServiceLogsRequest);

    }

    /**
     * Process Produto
     * @param Request $request
     * @return Produto
     */
    private function processProduto(Request $request): ?Produto
    {

        $loProdutoRequest = new ProdutoRequest();
        $loProdutoRequest->setId($request->input('Apresentacao'));

        $loProdutoResponse = $this->produtoCAN->fetchProdutoById($loProdutoRequest);

        if ($loProdutoResponse->getisOperationSuccess() && !empty($loProdutoResponse->getObject())) {
            return $loProdutoResponse->getObject();
        }

        return null;
    }

    /**
     * Validate Paciente State
     * @param Paciente $poPacienteSessao
     * @param Paciente $poPacienteLocal
     */
    private function validatePacienteState(Paciente $poPacienteSessao, Paciente &$poPacienteLocal) : void {

        $poPacienteLocal->LGV_USER_DATA_NASCIMENTO = $poPacienteSessao->LGV_USER_DATA_NASCIMENTO;
        $poPacienteLocal->LGV_USER_CPF = $poPacienteSessao->LGV_USER_CPF;
        $poPacienteLocal->LGV_USER_EMAIL = $poPacienteSessao->LGV_USER_EMAIL;

    }
}
