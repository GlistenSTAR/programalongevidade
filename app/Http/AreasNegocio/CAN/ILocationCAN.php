<?php
namespace App\Http\AreasNegocio\CAN;


use App\Http\Requests\BaseRequest;
use App\Http\Requests\LocationRequest;
use App\Http\Responses\CommonListResponse;
use App\Http\Responses\CommonObjectResponse;

interface ILocationCAN
{

    /**
     * Fetch all Estados
     * @return CommonListResponse
     */
    function fetchAllEstados();

    /**
     * Fetch estado by Id
     * @param LocationRequest $request
     * @return CommonObjectResponse
     */
    function fetchEstadoById(LocationRequest $request) : CommonObjectResponse;

    /**
     * Fetch cidades by estadoCategoryCAD.php
     * @param BaseRequest $request
     * @return CommonListResponse
     */
    function fetchCidadesByEstado(BaseRequest $request);

    /**
     * Fetch cidades by farmacia and estado CategoryCAD.php
     * @param BaseRequest $request
     * @return CommonListResponse
     */
    function fetchCidadesFarmaciaByEstado(BaseRequest $request) : CommonListResponse;

    /**
     * Fetch bairros by cidade CategoryCAD.php
     * @param LocationRequest $request
     * @return CommonListResponse
     */
    function fetchBairrosByCidade(LocationRequest $request);

    /**
     * Fetch farmacias by bairro CategoryCAD.php
     * @param LocationRequest $request
     * @return CommonListResponse
     */
    function fetchFarmaciasByBairro(LocationRequest $request);
}