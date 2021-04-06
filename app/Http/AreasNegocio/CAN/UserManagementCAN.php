<?php
namespace App\Http\AreasNegocio\CAN;

use App\Http\AreasNegocio\CAD\IUserManagementCAD;
use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class UserManagementCAN implements IUserManagementCAN
{

    private $userManagementCAD;

    /**
     * UserManagementCAN constructor.
     */
    public function __construct(IUserManagementCAD $poUserManagementCAD)
    {

        $this->userManagementCAD = $poUserManagementCAD;

    }


    /**
     * @inheritDoc
     */
    function fetchUserByCPF(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->fetchUserByCPF($request);
    }

    /**
     * @inheritDoc
     */
    function insertUser(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->insertUser($request);
    }

    /**
     * @inheritDoc
     */
    function updateUser(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->updateUser($request);
    }

    /**
     * @inheritDoc
     */
    function fetchMedicoByCRM(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->fetchMedicoByCRM($request);
    }

    /**
     * @inheritDoc
     */
    function insertMedico(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->insertMedico($request);
    }

    /**
     * @inheritDoc
     */
    function updateMedico(UserManagementRequest $request) : CommonObjectResponse
    {
        return $this->userManagementCAD->updateMedico($request);
    }

    /**
     * @inheritDoc
     */
    function registerAndLogin(UserManagementRequest $request): CommonObjectResponse
    {
        $request->setEmail($request->getPaciente()->LGV_USER_EMAIL);
        $request->setCpf($request->getPaciente()->LGV_USER_CPF);

        $loResponse = $this->userManagementCAD->fetchAuthUserByCredentials($request);

        if ($loResponse->getisOperationSuccess() && empty($loResponse->getObject())) {

            $laUserParams = [
                'name' => $request->getPaciente()->LGV_USER_NOME,
                'email' => (!empty($request->getPaciente()->LGV_USER_EMAIL)) ? $request->getPaciente()->LGV_USER_EMAIL : $request->getPaciente()->LGV_USER_CPF,
                'password' => Hash::make(Config::get("app.SEVEN_DEFAULT_PASSWORD")),
            ];

            $request->setUserParams($laUserParams);

            $loResponse = $this->userManagementCAD->insertAuthUser($request);

        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchUserByCPFAndDtNascimento(UserManagementRequest $request): CommonObjectResponse
    {
        return $this->userManagementCAD->fetchUserByCPFAndDtNascimento($request);
    }

}