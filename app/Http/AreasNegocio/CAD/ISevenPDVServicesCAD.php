<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;

interface ISevenPDVServicesCAD
{

    /**
     * Fetch User By Cpf and Dt. Nascimento
     *
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    public function fetchUserByCpfDtNascimento(UserManagementRequest $request);

    /**
     * Insert User
     *
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    public function insertUser(UserManagementRequest $request);

    /**
     * Update User
     *
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    public function updateUser(UserManagementRequest $request);


}