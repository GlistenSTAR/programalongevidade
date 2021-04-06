<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaCadastroPF2Response StructType
 * @subpackage Structs
 */
class ConsultaCadastroPF2Response extends AbstractStructBase
{
    /**
     * The ConsultaCadastroPF2Result
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var PDVConsultaCadastroPFV2ReturnData
     */
    public $ConsultaCadastroPF2Result;
    /**
     * Constructor method for ConsultaCadastroPF2Response
     * @uses ConsultaCadastroPF2Response::setConsultaCadastroPF2Result()
     * @param PDVConsultaCadastroPFV2ReturnData $consultaCadastroPF2Result
     */
    public function __construct(PDVConsultaCadastroPFV2ReturnData $consultaCadastroPF2Result = null)
    {
        $this
            ->setConsultaCadastroPF2Result($consultaCadastroPF2Result);
    }
    /**
     * Get ConsultaCadastroPF2Result value
     * @return PDVConsultaCadastroPFV2ReturnData|null
     */
    public function getConsultaCadastroPF2Result()
    {
        return $this->ConsultaCadastroPF2Result;
    }
    /**
     * Set ConsultaCadastroPF2Result value
     * @param PDVConsultaCadastroPFV2ReturnData $consultaCadastroPF2Result
     * @return ConsultaCadastroPF2Response
     */
    public function setConsultaCadastroPF2Result(PDVConsultaCadastroPFV2ReturnData $consultaCadastroPF2Result = null)
    {
        $this->ConsultaCadastroPF2Result = $consultaCadastroPF2Result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ConsultaCadastroPF2Response
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
