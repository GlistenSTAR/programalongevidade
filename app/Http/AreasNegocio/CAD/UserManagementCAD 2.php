<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\AreasNegocio\CAD\Models\Medico;
use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;
use App\User;
use Illuminate\Support\Facades\Log;

class UserManagementCAD implements IUserManagementCAD
{
    /**
     * @inheritDoc
     */
    function fetchUserByCPF(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Paciente::where('LGV_USER_CPF', '=' ,$request->getCpf())->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->fetchUserByCPF ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertUser(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getPaciente()->save();
            $loResponse->setObject($request->getPaciente());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->insertUser ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function updatetUser(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getPaciente()->update();
            $loResponse->setObject($request->getPaciente());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->updatetUser ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchMedicoByCRM(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Medico::where('LGV_MEDICO_CRM_NUMERO', '=' ,$request->getCrm())->where('LGV_MEDICO_CRM_UF', '=' ,$request->getUf())->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->fetchMedicoByCRM ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertMedico(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getMedico()->save();
            $loResponse->setObject($request->getMedico());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->insertMedico ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function updateMedico(UserManagementRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getMedico()->update();
            $loResponse->setObject($request->getMedico());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->updateMedico ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchAuthUserByCredentials(UserManagementRequest $request): CommonObjectResponse
    {
        $loResponse = new CommonObjectResponse();

        try {

            if (!empty($request->getEmail())) {
                $loResponse->setObject(User::where('email', '=' ,$request->getEmail())->first());

                if (empty($loResponse->getObject()) && !empty($request->getCpf())) {
                    $loResponse->setObject(User::where('email', '=' ,$request->getCpf())->first());
                }

            } else if (!empty($request->getCpf())) {
                $loResponse->setObject(User::where('email', '=' ,$request->getCpf())->first());
            }

            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->fetchAuthUserByCredentials ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertAuthUser(UserManagementRequest $request): CommonObjectResponse
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(User::create($request->getUserParams()));
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->insertAuthUser ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchUserByCPFAndDtNascimento(UserManagementRequest $request) : CommonObjectResponse
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Paciente::where('LGV_USER_CPF', '=' ,$request->getCpf())->where('LGV_USER_DATA_NASCIMENTO', '=', $request->getDtNascimento())->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######UserManagementCAD->fetchUserByCPF ---- ".$e->getMessage());
        }

        return $loResponse;
    }

}