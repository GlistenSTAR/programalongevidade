<?php
namespace App\Http\Controllers;

use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\AreasNegocio\CAN\IUserManagementCAN;
use App\Http\Controllers\Utils\ServiceUtils;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Parser;

class SevenPDVController extends Controller
{

    private $serviceLogsCAN;
    private $produtoCAN;
    private $serviceUtils;
    private $userManagementCAN;

    /**
     * SevenPDVController constructor.
     */
    public function __construct(IServiceLogsCAN $poServiceLogsCAN, IProdutoCAN $poProdutoCAN, IUserManagementCAN $poUserManagementCAN)
    {
        $this->serviceLogsCAN = $poServiceLogsCAN;
        $this->produtoCAN = $poProdutoCAN;
        $this->userManagementCAN = $poUserManagementCAN;
        $this->serviceUtils = new ServiceUtils($poServiceLogsCAN, $poProdutoCAN);
    }

    public function consultaCadastroAction(Request $poRequest)
    {

        $loServiceUtils = new ServiceUtils($this->serviceLogsCAN, $this->produtoCAN, $this->userManagementCAN);

        $loPaciente = new Paciente();
        $loUser = new User();

        if ($loServiceUtils->loginServiceAction($poRequest, $loPaciente, $loUser)) {

            if (Auth::attempt(['email' => $loPaciente->LGV_USER_EMAIL, 'password' => Config::get("app.SEVEN_DEFAULT_PASSWORD")], true)) {

                session(['paciente' => $loPaciente]);
                session(['authUser' => $loUser]);
                return redirect()->intended();

            } else if (Auth::attempt(['email' => $loPaciente->LGV_USER_CPF, 'password' => Config::get("app.SEVEN_DEFAULT_PASSWORD")], true)) {

                session(['paciente' => $loPaciente]);
                session(['authUser' => $loUser]);
                return redirect()->intended();

            }


        } else {
            return redirect()->action('CommonController@indexAction', ['error' => 'true']);
        }

        return redirect()->intended();
    }

}
