<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDVTabelaV1ReturnTabelaData StructType
 * @subpackage Structs
 */
class PDVTabelaV1ReturnTabelaData extends BaseWebServiceReturnTabela
{
    /**
     * The ImagemTabela
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImagemTabela;
    /**
     * Constructor method for PDVTabelaV1ReturnTabelaData
     * @uses PDVTabelaV1ReturnTabelaData::setImagemTabela()
     * @param string $imagemTabela
     */
    public function __construct($imagemTabela = null)
    {
        $this
            ->setImagemTabela($imagemTabela);
    }
    /**
     * Get ImagemTabela value
     * @return string|null
     */
    public function getImagemTabela()
    {
        return $this->ImagemTabela;
    }
    /**
     * Set ImagemTabela value
     * @param string $imagemTabela
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVTabelaV1ReturnTabelaData
     */
    public function setImagemTabela($imagemTabela = null)
    {
        // validation for constraint: string
        if (!is_null($imagemTabela) && !is_string($imagemTabela)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imagemTabela)), __LINE__);
        }
        $this->ImagemTabela = $imagemTabela;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVTabelaV1ReturnTabelaData
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
