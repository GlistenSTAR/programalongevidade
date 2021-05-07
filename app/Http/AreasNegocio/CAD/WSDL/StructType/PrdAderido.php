<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrdAderido StructType
 * @subpackage Structs
 */
class PrdAderido extends AbstractStructBase
{
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EAN;
    /**
     * The Desconto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Desconto;
    /**
     * The QtdLimite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $QtdLimite;
    /**
     * The Campanha
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Campanha;
    /**
     * Constructor method for PrdAderido
     * @uses PrdAderido::setEAN()
     * @uses PrdAderido::setDesconto()
     * @uses PrdAderido::setQtdLimite()
     * @uses PrdAderido::setCampanha()
     * @param int $eAN
     * @param int $desconto
     * @param int $qtdLimite
     * @param string $campanha
     */
    public function __construct($eAN = null, $desconto = null, $qtdLimite = null, $campanha = null)
    {
        $this
            ->setEAN($eAN)
            ->setDesconto($desconto)
            ->setQtdLimite($qtdLimite)
            ->setCampanha($campanha);
    }
    /**
     * Get EAN value
     * @return int
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param int $eAN
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: int
        if (!is_null($eAN) && !is_numeric($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get Desconto value
     * @return int
     */
    public function getDesconto()
    {
        return $this->Desconto;
    }
    /**
     * Set Desconto value
     * @param int $desconto
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido
     */
    public function setDesconto($desconto = null)
    {
        // validation for constraint: int
        if (!is_null($desconto) && !is_numeric($desconto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($desconto)), __LINE__);
        }
        $this->Desconto = $desconto;
        return $this;
    }
    /**
     * Get QtdLimite value
     * @return int
     */
    public function getQtdLimite()
    {
        return $this->QtdLimite;
    }
    /**
     * Set QtdLimite value
     * @param int $qtdLimite
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido
     */
    public function setQtdLimite($qtdLimite = null)
    {
        // validation for constraint: int
        if (!is_null($qtdLimite) && !is_numeric($qtdLimite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($qtdLimite)), __LINE__);
        }
        $this->QtdLimite = $qtdLimite;
        return $this;
    }
    /**
     * Get Campanha value
     * @return string|null
     */
    public function getCampanha()
    {
        return $this->Campanha;
    }
    /**
     * Set Campanha value
     * @param string $campanha
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido
     */
    public function setCampanha($campanha = null)
    {
        // validation for constraint: string
        if (!is_null($campanha) && !is_string($campanha)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campanha)), __LINE__);
        }
        $this->Campanha = $campanha;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido
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
