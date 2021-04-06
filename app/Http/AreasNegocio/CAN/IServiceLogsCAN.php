<?php
namespace App\Http\AreasNegocio\CAN;


use App\Http\Requests\ServiceLogsRequest;
use App\Http\Responses\CommonObjectResponse;

interface IServiceLogsCAN
{

    /**
     * Fetch a Fale Conosco by Id
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function fetchFaleConoscoById(ServiceLogsRequest $request);

    /**
     * Insert Fale Conosco Log
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function insertFaleConoscoLog(ServiceLogsRequest $request);

    /**
     * Insert Requisição Log
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function insertRequisicaoLog(ServiceLogsRequest $request);

    /**
     * Fetch the last sessao PDV
     * @return CommonObjectResponse
     */
    function fetchLastSessaoPDV();

    /**
     * Insert sessao PDV
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function insertSessaoPDV(ServiceLogsRequest $request);

    /**
     * Update sessao PDV
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function updateSessaoPDV(ServiceLogsRequest $request);

    /**
     * Fetch the last sessao PDV
     * @return CommonObjectResponse
     */
    function fetchControleTabela();

    /**
     * Fetch the last sessao PDV
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function updateControleTabela(ServiceLogsRequest $request);

    /**
     * Insert Log Sessao
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function insertLogSessao(ServiceLogsRequest $request);

    /**
     * Insert Stats
     * @param ServiceLogsRequest $request
     * @return CommonObjectResponse
     */
    function insertStats(ServiceLogsRequest $request) : CommonObjectResponse;

}