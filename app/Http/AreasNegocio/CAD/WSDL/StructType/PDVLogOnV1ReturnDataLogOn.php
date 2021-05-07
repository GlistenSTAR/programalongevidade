<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDVLogOnV1ReturnData StructType
 * @package LogOn
 * @subpackage Structs
 */
class PDVLogOnV1ReturnDataLogOn extends BaseWebServiceReturnLogOn
{
    /**
     * The TempoSessao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TempoSessao;
    /**
     * Constructor method for PDVLogOnV1ReturnData
     * @uses PDVLogOnV1ReturnDataLogOn::setTempoSessao()
     * @param int $tempoSessao
     */
    public function __construct($tempoSessao = null)
    {
        $this
            ->setTempoSessao($tempoSessao);
    }
    /**
     * Get TempoSessao value
     * @return int
     */
    public function getTempoSessao()
    {
        return $this->TempoSessao;
    }
    /**
     * Set TempoSessao value
     * @param int $tempoSessao
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn
     */
    public function setTempoSessao($tempoSessao = null)
    {
        // validation for constraint: int
        if (!is_null($tempoSessao) && !is_numeric($tempoSessao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tempoSessao)), __LINE__);
        }
        $this->TempoSessao = $tempoSessao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn
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
