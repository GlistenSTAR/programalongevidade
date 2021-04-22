<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\AreasNegocio\CAD\Models\ControleTabela;
use App\Http\AreasNegocio\CAD\Models\FaleConosco;
use App\Http\AreasNegocio\CAD\Models\SessaoPDV;
use App\Http\Requests\ServiceLogsRequest;
use App\Http\Responses\CommonObjectResponse;
use Illuminate\Support\Facades\Log;

class ServiceLogsCAD implements IServiceLogsCAD
{
    /**
     * ServiceLogsCAD constructor.
     */
    public function __construct()
    {
    }

    /**
     * @inheritDoc
     */
    function fetchFaleConoscoById(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(FaleConosco::find($request->getId()));
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->fetchFaleConoscoById ---- ".$e->getMessage());
        }

        return $loResponse;
    }


    /**
     * @inheritDoc
     */
    function insertFaleConoscoLog(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getFaleConosco()->save();
            $loResponse->setObject($request->getFaleConosco());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->insertFaleConoscoLog ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertRequisicaoLog(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getRequisicao()->save();
            $loResponse->setObject($request->getRequisicao());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->insertRequisicaoLog ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchLastSessaoPDV()
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(SessaoPDV::where("LGV_ATIVO", "=", 1)->orderby('LGV_DT_INCLUSAO', 'desc')->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->fetchLastSessaoPDV ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertSessaoPDV(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getSessaoPDV()->save();
            $loResponse->setObject($request->getSessaoPDV());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->insertSessaoPDV ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function updateSessaoPDV(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getSessaoPDV()->update();
            $loResponse->setObject($request->getSessaoPDV());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->updateSessaoPDV ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchControleTabela()
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(ControleTabela::first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->fetchControleTabela ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function updateControleTabela(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getControleTabela()->update();
            $loResponse->setObject($request->getControleTabela());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->updateControleTabela ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertLogSessao(ServiceLogsRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getLogSessao()->save();
            $loResponse->setObject($request->getLogSessao());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->insertLogSessao ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertStats(ServiceLogsRequest $request): CommonObjectResponse
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getStats()->save();
            $loResponse->setObject($request->getLogSessao());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ServiceLogsCAD->insertStats ---- ".$e->getMessage());
        }

        return $loResponse;
    }


}