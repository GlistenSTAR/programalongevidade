<?php

namespace App\Http\Controllers;

use App\Http\AreasNegocio\CAD\Enums\RouteIdsEnum;
use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\AreasNegocio\CAD\Models\Stats;
use App\Http\AreasNegocio\CAN\ILocationCAN;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\Requests\LocationRequest;
use App\Http\Requests\ServiceLogsRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class CommonController extends Controller
{

    private $locationCAN;
    private $produtoCAN;
    private $paciente;
    private $logadoView;
    private $serviceLogsCAN;
 
    /**
     * CommonController constructor.
     */
    public function __construct(ILocationCAN $poLocationCAN, IProdutoCAN $poProdutoCAN, IServiceLogsCAN $poServiceLogsCAN)
    {
        $this->locationCAN = $poLocationCAN;
        $this->produtoCAN = $poProdutoCAN;
        $this->serviceLogsCAN = $poServiceLogsCAN;
    }


    public function alteraDadosOkAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::alteraDadosOkAction);
        return view('!_save_profile')->with('user', $this->paciente);
    }

    public function alteraDadosPessoaisAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::alteraDadosPessoaisAction);

        if (empty($this->paciente->LGV_USER_TELEFONE_FIXO_DDD) || empty($this->paciente->LGV_USER_TELEFONE_FIXO_NUMERO)) {

            $this->paciente->LGV_USER_TELEFONE_FIXO_DDD = null;
            $this->paciente->LGV_USER_TELEFONE_FIXO_NUMERO = null;
        }

        if (empty($this->paciente->LGV_USER_TELEFONE_CELULAR_DDD) || empty($this->paciente->LGV_USER_TELEFONE_CELULAR_NUMERO)) {

            $this->paciente->LGV_USER_TELEFONE_CELULAR_DDD = null;
            $this->paciente->LGV_USER_TELEFONE_CELULAR_NUMERO = null;
        }

        return view('!_edit_profile')->with('user', $this->paciente);
    }

    public function buscaFarmaciasAction(Request $poRequest)
    {
        $cidade = $poRequest->input("cidade");
        $bairro = $poRequest->input("bairro");

        $loRequest = new LocationRequest();
        $loRequest->setCidade($cidade);
        $loRequest->setBairro($bairro);
        $loRequest->setId($poRequest->input("uf"));

        $estado = $this->locationCAN->fetchEstadoById($loRequest)->getObject()->ESTADO_NOME;

        $laFarmacias = $this->locationCAN->fetchFarmaciasByBairro($loRequest)->getObjList();

        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::buscaFarmaciasAction);
        return view('!_drug_position')->with(['user' => $this->paciente, 'estado' => $estado, 'cidade' => $cidade, 'bairro' => $bairro, 'laFarmacias' => $laFarmacias, 'laEstados' => $this->fetchAllEstados()]);

    }

    public function cadastroAdesaoAction(Request $request)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($request, RouteIdsEnum::cadastroAdesaoAction);
        return view('!_register')->with(['userCpf' => $request->input('cpfContato'),
            'laEstados' => $this->fetchAllEstados(),
            'laProdutos' => $this->fetchAllProdutos(),
            'userEmail' => $request->input('Email')]);
    }

    public function faleConoscoAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::faleConoscoAction);
        return view('!_contact_us')->with([
            'laEstados' => $this->fetchAllEstados(),
            'laProdutos' => $this->fetchAllProdutos(),
            'user' => $this->paciente
        ]);

    }

    public function faleConoscoOkAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::faleConoscoOkAction);
        return view('!_contact_us_ok')->with('user', $this->paciente);

    }

    public function farmaciasAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::farmaciasAction);
        return view('!_find_drugstore')->with(['user' => $this->paciente, 'laEstados' => $this->fetchAllEstados()]);
    }

    public function indexAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::faleConoscoOkAction);
        return view('!_index')->with(['user' => $this->paciente, 'laEstados' => $this->fetchAllEstados(), 'login' => $this->logadoView]);
    }

    public function loginAction(Request $poRequest)
    {
        $this->insertRequestToStats($poRequest, RouteIdsEnum::loginAction);
        return view('!_login');
    }

    public function novaRequisicaoAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::novaRequisicaoAction);
        return view('!_new_request')->with(['user' => $this->paciente, 'laProdutos' => $this->fetchAllProdutos(), 'laEstados' => $this->fetchAllEstados()]);

    }

    public function painelPessoalAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::painelPessoalAction);
        return view('painel_pessoal')->with('user', $this->paciente);

    }

    public function posCadastroAdesaoOkAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::posCadastroAdesaoOKAction);
        return view('!_sucesse_register')->with(['user' => $this->paciente, 'laEstados' => $this->fetchAllEstados(), 'login' => $this->logadoView]);

    }

    public function processoOkNovaRequisicaoAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::processoOkNovaRequisicaoAction);
        return view('!_success_order')->with('user', $this->paciente);

    }

    public function produtosAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::produtosAction);
        return view('produtos')->with('user', $this->paciente);

    }

    public function programaAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::programaAction);
        return view('programa')->with('user', $this->paciente);

    }

    public function regulamentoAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::regulamentoAction);
        return view('regulamento')->with('user', $this->paciente);

    }

    public function sobreAction(Request $poRequest)
    {
        $this->checkIfAuthenticated();
        $this->insertRequestToStats($poRequest, RouteIdsEnum::sobreAction);
        return view('!_about_us')->with('user', $this->paciente);

    }

    public function logoutAction()
    {

        Auth::logout();

        return redirect()->intended();
    }

    public function err500Action(Request $poRequest) {

        $this->checkIfAuthenticated();
        return view('err_500')->with(['user' => $this->paciente, 'err_msg' => session('err_msg')]);
    }

    private function fetchAllEstados()
    {

        $loResponse = $this->locationCAN->fetchAllEstados();
        $laEstados = [];

        if ($loResponse->getisOperationSuccess()) {
            $laEstados = $loResponse->getObjList();
        }

        return $laEstados;
    }

    private function fetchAllProdutos()
    {

        $loResponse = $this->produtoCAN->fetchAllProdutos();
        $laProdutos = [];

        if ($loResponse->getisOperationSuccess()) {
            $laProdutos = $loResponse->getObjList();
        }

        return $laProdutos;
    }

    private function checkIfAuthenticated()
    {

        $this->paciente = new Paciente();
        $this->logadoView = "";

        if (Auth::check() && !empty(session('paciente'))) {

            $this->paciente = session('paciente');
            $this->logadoView = "_logado";
        }

    }

    private function insertRequestToStats(Request $request, $piRouteId) {

        $loStats = new Stats();

        $loStats->STATIS_ID_CONTEUDO_ACESSADO = $piRouteId;
        $loStats->STATS_BROWSER = $request->server("HTTP_USER_AGENT");
        $loStats->STATS_DATA = Carbon::now("America/Sao_Paulo");
        $loStats->STATS_IP = $request->server("REMOTE_ADDR");
        $loStats->STATS_PAGINA_ACESSADA = (!empty($request->server("REQUEST_URI")) ? $request->server("REQUEST_URI") : "/");
        $loStats->STATS_TIPO_ACESSO = "";

        if (!empty($this->paciente)) {
            $loStats->STATS_ID_USUARIO_LOGADO = $this->paciente->LGV_USER_ID;
        }

        $loRequest = new ServiceLogsRequest();

        $loRequest->setStats($loStats);

        $loResponse = $this->serviceLogsCAN->insertStats($loRequest);

        if (!$loResponse->getisOperationSuccess()) {
            Log::info("Erro gravar Stats -> ".json_encode($loRequest));
        }

    }

}
