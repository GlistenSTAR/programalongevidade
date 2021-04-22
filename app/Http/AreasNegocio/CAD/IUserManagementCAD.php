<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;

interface IUserManagementCAD
{

    /**
     * Fetch user by cpf
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchUserByCPF(UserManagementRequest $request);

    /**
     * Insert user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function insertUser(UserManagementRequest $request);

    /**
     * Update user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function updateUser(UserManagementRequest $request);

    /**
     * Fetch cidades by estadoCategoryCAD.php
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchMedicoByCRM(UserManagementRequest $request);

    /**
     * Insert medico
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function insertMedico(UserManagementRequest $request);

    /**
     * Update medico
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function updateMedico(UserManagementRequest $request);

    /**
     * Fetch User by Credentials
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchAuthUserByCredentials(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Inser Auth user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function insertAuthUser(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Fetch user by cpf and email
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchUserByCPFAndDtNascimento(UserManagementRequest $request) : CommonObjectResponse;

}