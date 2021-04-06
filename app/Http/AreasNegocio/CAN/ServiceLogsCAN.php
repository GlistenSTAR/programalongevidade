<?php
namespace App\Http\AreasNegocio\CAN;


use App\Http\AreasNegocio\CAD\IServiceLogsCAD;
use App\Http\Requests\ServiceLogsRequest;
use App\Http\Responses\CommonObjectResponse;

class ServiceLogsCAN implements IServiceLogsCAN
{

    private $serviceLogsCAD;

    /**
     * ServiceLogsCAN constructor.
     */
    public function __construct(IServiceLogsCAD $poServiceLogsCAD)
    {

        $this->serviceLogsCAD = $poServiceLogsCAD;

    }

    /**
     * @inheritDoc
     */
    function fetchFaleConoscoById(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->fetchFaleConoscoById($request);
    }


    /**
     * @inheritDoc
     */
    function insertFaleConoscoLog(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->insertFaleConoscoLog($request);
    }

    /**
     * @inheritDoc
     */
    function insertRequisicaoLog(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->insertRequisicaoLog($request);
    }

    /**
     * @inheritDoc
     */
    function fetchLastSessaoPDV()
    {
        return $this->serviceLogsCAD->fetchLastSessaoPDV();
    }

    /**
     * @inheritDoc
     */
    function insertSessaoPDV(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->insertSessaoPDV($request);
    }

    /**
     * @inheritDoc
     */
    function updateSessaoPDV(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->updateSessaoPDV($request);
    }

    /**
     * @inheritDoc
     */
    function fetchControleTabela()
    {
        return $this->serviceLogsCAD->fetchControleTabela();
    }

    /**
     * @inheritDoc
     */
    function updateControleTabela(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->updateControleTabela($request);
    }

    /**
     * @inheritDoc
     */
    function insertLogSessao(ServiceLogsRequest $request)
    {
        return $this->serviceLogsCAD->insertLogSessao($request);
    }

    /**
     * @inheritDoc
     */
    function insertStats(ServiceLogsRequest $request): CommonObjectResponse
    {
        return $this->serviceLogsCAD->insertStats($request);
    }


}