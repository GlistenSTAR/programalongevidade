<?php

namespace App\Http\AreasNegocio\CAD;

use App\Http\AreasNegocio\CAD\Models\Category;
use App\Http\AreasNegocio\CAD\Models\Cidade;
use App\Http\AreasNegocio\CAD\Models\Estado;
use App\Http\AreasNegocio\CAD\Models\Farmacia;
use App\Http\Requests\BaseRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\LocationRequest;
use App\Http\Responses\CommonListResponse;
use App\Http\Responses\CommonObjectResponse;
use Illuminate\Support\Facades\Log;

class LocationCAD implements ILocationCAD
{
    /**
     * @inheritDoc
     */
    function fetchAllEstados()
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Estado::orderBy('ESTADO_NOME')->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchAllEstados - " . $e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchEstadoById(LocationRequest $request): CommonObjectResponse
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Estado::find($request->getId()));
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchEstadoById - " . $e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchCidadesByEstado(BaseRequest $request)
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Cidade::where('CIDADE_ESTADO', '=', $request->getId())->orderBy('CIDADE_NOME')->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchCidadesByEstado - " . $e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchCidadesFarmaciaByEstado(BaseRequest $request): CommonListResponse
    {
        $loResponse = new CommonListResponse();

        try {
            $loResponse->setObjList(Farmacia::where("LGV_FARMACIA_UF", "=", $request->getId())->select('LGV_FARMACIA_CIDADE as CIDADE_NOME', 'LGV_FARMACIA_CIDADE as CIDADE_ID')->distinct()->orderBy('LGV_FARMACIA_CIDADE', 'asc')->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchCidadesByEstado - " . $e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchBairrosByCidade(LocationRequest $request)
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Farmacia::distinct()->where('LGV_FARMACIA_CIDADE', '=', $request->getCidade())->orderBy('LGV_FARMACIA_BAIRRO')->get(['LGV_FARMACIA_BAIRRO']));
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchBairrosByCidade - " . $e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchFarmaciasByBairro(LocationRequest $request)
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Farmacia::where('LGV_FARMACIA_CIDADE', '=', $request->getCidade())->where('LGV_FARMACIA_BAIRRO', '=', $request->getBairro())->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####LocationCAD->fetchFarmaciasByBairro - " . $e->getMessage());
        }

        return $loResponse;
    }

}