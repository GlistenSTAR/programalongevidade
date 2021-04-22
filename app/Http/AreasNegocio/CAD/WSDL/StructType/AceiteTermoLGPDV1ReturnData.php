<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;


/**
 * This class stands for AceiteTermoLGPDV1ReturnData StructType
 * @subpackage Structs
 */
class AceiteTermoLGPDV1ReturnData extends BaseWebServiceReturnAceite
{
    /**
     * The Holder_IdNr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Holder_IdNr;
    /**
     * Constructor method for AceiteTermoLGPDV1ReturnData
     * @uses AceiteTermoLGPDV1ReturnData::setHolder_IdNr()
     * @param string $holder_IdNr
     */
    public function __construct($holder_IdNr = null)
    {
        $this
            ->setHolder_IdNr($holder_IdNr);
    }
    /**
     * Get Holder_IdNr value
     * @return string|null
     */
    public function getHolder_IdNr()
    {
        return $this->Holder_IdNr;
    }
    /**
     * Set Holder_IdNr value
     * @param string $holder_IdNr
     * @return AceiteTermoLGPDV1ReturnData
     */
    public function setHolder_IdNr($holder_IdNr = null)
    {
        // validation for constraint: string
        if (!is_null($holder_IdNr) && !is_string($holder_IdNr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holder_IdNr, true), gettype($holder_IdNr)), __LINE__);
        }
        $this->Holder_IdNr = $holder_IdNr;
        return $this;
    }
}
