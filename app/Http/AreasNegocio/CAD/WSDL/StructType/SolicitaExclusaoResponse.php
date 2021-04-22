<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolicitaExclusaoResponse StructType
 * @subpackage Structs
 */
class SolicitaExclusaoResponse extends AbstractStructBase
{
    /**
     * The SolicitaExclusaoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SolicitaExclusaoConsumidorV1ReturnData
     */
    public $SolicitaExclusaoResult;
    /**
     * Constructor method for SolicitaExclusaoResponse
     * @uses SolicitaExclusaoResponse::setSolicitaExclusaoResult()
     * @param \StructType\SolicitaExclusaoConsumidorV1ReturnData $solicitaExclusaoResult
     */
    public function __construct(\StructType\SolicitaExclusaoConsumidorV1ReturnData $solicitaExclusaoResult = null)
    {
        $this
            ->setSolicitaExclusaoResult($solicitaExclusaoResult);
    }
    /**
     * Get SolicitaExclusaoResult value
     * @return \StructType\SolicitaExclusaoConsumidorV1ReturnData|null
     */
    public function getSolicitaExclusaoResult()
    {
        return $this->SolicitaExclusaoResult;
    }
    /**
     * Set SolicitaExclusaoResult value
     * @param \StructType\SolicitaExclusaoConsumidorV1ReturnData $solicitaExclusaoResult
     * @return \StructType\SolicitaExclusaoResponse
     */
    public function setSolicitaExclusaoResult(\StructType\SolicitaExclusaoConsumidorV1ReturnData $solicitaExclusaoResult = null)
    {
        $this->SolicitaExclusaoResult = $solicitaExclusaoResult;
        return $this;
    }
}
