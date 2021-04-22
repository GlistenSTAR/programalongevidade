<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;


use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AceiteTermoResponse StructType
 * @subpackage Structs
 */
class AceiteTermoResponse extends AbstractStructBase
{
    /**
     * The AceiteTermoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var AceiteTermoLGPDV1ReturnData
     */
    public $AceiteTermoResult;
    /**
     * Constructor method for AceiteTermoResponse
     * @uses AceiteTermoResponse::setAceiteTermoResult()
     * @param AceiteTermoLGPDV1ReturnData $aceiteTermoResult
     */
    public function __construct(\StructType\AceiteTermoLGPDV1ReturnData $aceiteTermoResult = null)
    {
        $this
            ->setAceiteTermoResult($aceiteTermoResult);
    }
    /**
     * Get AceiteTermoResult value
     * @return AceiteTermoLGPDV1ReturnData|null
     */
    public function getAceiteTermoResult()
    {
        return $this->AceiteTermoResult;
    }
    /**
     * Set AceiteTermoResult value
     * @param AceiteTermoLGPDV1ReturnData $aceiteTermoResult
     * @return AceiteTermoResponse
     */
    public function setAceiteTermoResult(\StructType\AceiteTermoLGPDV1ReturnData $aceiteTermoResult = null)
    {
        $this->AceiteTermoResult = $aceiteTermoResult;
        return $this;
    }
}
