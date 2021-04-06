<?php
namespace App\Http\Requests;

use App\Http\AreasNegocio\CAD\Models\ControleTabela;
use App\Http\AreasNegocio\CAD\Models\FaleConosco;
use App\Http\AreasNegocio\CAD\Models\LogSessao;
use App\Http\AreasNegocio\CAD\Models\Requisicao;
use App\Http\AreasNegocio\CAD\Models\SessaoPDV;
use App\Http\AreasNegocio\CAD\Models\Stats;

class ServiceLogsRequest extends BaseRequest
{

    private $faleConosco;
    private $requisicao;
    private $sessaoPDV;
    private $controleTabela;
    private $logSessao;
    private $stats;

    /**
     * ServiceLogsRequest constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return FaleConosco
     */
    public function getFaleConosco()
    {
        return $this->faleConosco;
    }

    /**
     * @param FaleConosco $faleConosco
     */
    public function setFaleConosco(FaleConosco $faleConosco): void
    {
        $this->faleConosco = $faleConosco;
    }

    /**
     * @return Requisicao
     */
    public function getRequisicao()
    {
        return $this->requisicao;
    }

    /**
     * @param Requisicao $requisicao
     */
    public function setRequisicao(Requisicao $requisicao): void
    {
        $this->requisicao = $requisicao;
    }

    /**
     * @return SessaoPDV
     */
    public function getSessaoPDV()
    {
        return $this->sessaoPDV;
    }

    /**
     * @param SessaoPDV $sessaoPDV
     */
    public function setSessaoPDV(SessaoPDV $sessaoPDV): void
    {
        $this->sessaoPDV = $sessaoPDV;
    }

    /**
     * @return ControleTabela
     */
    public function getControleTabela()
    {
        return $this->controleTabela;
    }

    /**
     * @param ControleTabela $controleTabela
     */
    public function setControleTabela(ControleTabela $controleTabela): void
    {
        $this->controleTabela = $controleTabela;
    }

    /**
     * @return LogSessao
     */
    public function getLogSessao()
    {
        return $this->logSessao;
    }

    /**
     * @param LogSessao $logSessao
     */
    public function setLogSessao(LogSessao $logSessao): void
    {
        $this->logSessao = $logSessao;
    }

    /**
     * @return Stats
     */
    public function getStats() : Stats
    {
        return $this->stats;
    }

    /**
     * @param Stats $stats
     */
    public function setStats(Stats $stats): void
    {
        $this->stats = $stats;
    }

}