<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TabelaResponse StructType
 * @subpackage Structs
 */
class TabelaResponse extends AbstractStructBase
{
    /**
     * The TabelaResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var PDVTabelaV1ReturnTabelaData
     */
    public $TabelaResult;
    /**
     * Constructor method for TabelaResponse
     * @uses TabelaResponse::setTabelaResult()
     * @param PDVTabelaV1ReturnTabelaData $tabelaResult
     */
    public function __construct(PDVTabelaV1ReturnTabelaData $tabelaResult = null)
    {
        $this
            ->setTabelaResult($tabelaResult);
    }
    /**
     * Get TabelaResult value
     * @return PDVTabelaV1ReturnTabelaData|null
     */
    public function getTabelaResult()
    {
        return $this->TabelaResult;
    }
    /**
     * Set TabelaResult value
     * @param PDVTabelaV1ReturnTabelaData $tabelaResult
     * @return TabelaResponse
     */
    public function setTabelaResult(PDVTabelaV1ReturnTabelaData $tabelaResult = null)
    {
        $this->TabelaResult = $tabelaResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return TabelaResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
