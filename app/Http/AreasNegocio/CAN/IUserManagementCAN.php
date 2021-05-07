<?php
namespace App\Http\AreasNegocio\CAN;

use App\Http\Requests\UserManagementRequest;
use App\Http\Responses\CommonObjectResponse;

interface IUserManagementCAN
{

    /**
     * Fetch user by cpf
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchUserByCPF(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Insert user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function insertUser(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Update user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function updateUser(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Fetch cidades by estadoCategoryCAD.php
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchMedicoByCRM(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Insert medico
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function insertMedico(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Update medico
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function updateMedico(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Register and login and user
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function registerAndLogin(UserManagementRequest $request) : CommonObjectResponse;

    /**
     * Fetch user by cpf and email
     * @param UserManagementRequest $request
     * @return CommonObjectResponse
     */
    function fetchUserByCPFAndDtNascimento(UserManagementRequest $request) : CommonObjectResponse;

}