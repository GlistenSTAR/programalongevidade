<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDVCadastroPFV2ReturnCadastroPFData StructType
 * @subpackage Structs
 */
class PDVCadastroPFV2ReturnCadastroPFData extends BaseWebServiceReturnCadastroPF
{
    /**
     * The Administradora
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Administradora;
    /**
     * Constructor method for PDVCadastroPFV2ReturnCadastroPFData
     * @uses PDVCadastroPFV2ReturnCadastroPFData::setAdministradora()
     * @param string $administradora
     */
    public function __construct($administradora = null)
    {
        $this
            ->setAdministradora($administradora);
    }
    /**
     * Get Administradora value
     * @return string|null
     */
    public function getAdministradora()
    {
        return $this->Administradora;
    }
    /**
     * Set Administradora value
     * @param string $administradora
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData
     */
    public function setAdministradora($administradora = null)
    {
        // validation for constraint: string
        if (!is_null($administradora) && !is_string($administradora)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($administradora)), __LINE__);
        }
        $this->Administradora = $administradora;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVCadastroPFV2ReturnCadastroPFData
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
