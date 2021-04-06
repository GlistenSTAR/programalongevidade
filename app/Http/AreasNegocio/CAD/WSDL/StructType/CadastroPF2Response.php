<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CadastroPF2Response StructType
 * @subpackage Structs
 */
class CadastroPF2Response extends AbstractStructBase
{
    /**
     * The CadastroPF2Result
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData
     */
    public $CadastroPF2Result;
    /**
     * Constructor method for CadastroPF2Response
     * @uses CadastroPF2Response::setCadastroPF2Result()
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData $cadastroPF2Result
     */
    public function __construct(\App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData $cadastroPF2Result = null)
    {
        $this
            ->setCadastroPF2Result($cadastroPF2Result);
    }
    /**
     * Get CadastroPF2Result value
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData|null
     */
    public function getCadastroPF2Result()
    {
        return $this->CadastroPF2Result;
    }
    /**
     * Set CadastroPF2Result value
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData $cadastroPF2Result
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2Response
     */
    public function setCadastroPF2Result(\App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData $cadastroPF2Result = null)
    {
        $this->CadastroPF2Result = $cadastroPF2Result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2Response
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
