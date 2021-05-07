<?php
namespace App\Http\AreasNegocio\CAN;

use App\Http\AreasNegocio\CAD\ILocationCAD;
use App\Http\Requests\BaseRequest;
use App\Http\Requests\LocationRequest;
use App\Http\Responses\CommonListResponse;
use App\Http\Responses\CommonObjectResponse;
use Illuminate\Support\Facades\Cache;

class LocationCAN implements ILocationCAN
{

    private $locationCAD;
    private const CACHE_MINUTES = 1440;
    private const STATES_KEY = "STATES_KEY";
    private const CITIES_KEY = "CITIES_KEY";
    private const NEIGHBORHOODS_KEY = "NEIGHBORHOODS_KEY";

    /**
     * LocationCAN constructor.
     */
    public function __construct(ILocationCAD $poLocationCAD)
    {

        $this->locationCAD = $poLocationCAD;

    }

    /**
     * @inheritDoc
     */
    function fetchAllEstados()
    {
        return $this->locationCAD->fetchAllEstados();
    }

    /**
     * @inheritDoc
     */
    function fetchEstadoById(LocationRequest $request): CommonObjectResponse
    {
        return $this->locationCAD->fetchEstadoById($request);
    }

    /**
     * @inheritDoc
     */
    function fetchCidadesByEstado(BaseRequest $request)
    {
        return $this->locationCAD->fetchCidadesByEstado($request);
    }

    /**
     * @inheritDoc
     */
    function fetchCidadesFarmaciaByEstado(BaseRequest $request): CommonListResponse
    {
        return $this->locationCAD->fetchCidadesFarmaciaByEstado($request);
    }

    /**
     * @inheritDoc
     */
    function fetchBairrosByCidade(LocationRequest $request)
    {
        return $this->locationCAD->fetchBairrosByCidade($request);
    }

    /**
     * @inheritDoc
     */
    function fetchFarmaciasByBairro(LocationRequest $request)
    {
        return $this->locationCAD->fetchFarmaciasByBairro($request);
    }

}