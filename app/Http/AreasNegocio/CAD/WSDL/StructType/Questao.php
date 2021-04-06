<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Questao StructType
 * @subpackage Structs
 */
class Questao extends AbstractStructBase
{
    /**
     * The Resposta
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Resposta;
    /**
     * The CampoLivre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampoLivre;
    /**
     * Constructor method for Questao
     * @uses Questao::setResposta()
     * @uses Questao::setCampoLivre()
     * @param string $resposta
     * @param string $campoLivre
     */
    public function __construct($resposta = null, $campoLivre = null)
    {
        $this
            ->setResposta($resposta)
            ->setCampoLivre($campoLivre);
    }
    /**
     * Get Resposta value
     * @return string|null
     */
    public function getResposta()
    {
        return $this->Resposta;
    }
    /**
     * Set Resposta value
     * @param string $resposta
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\Questao
     */
    public function setResposta($resposta = null)
    {
        // validation for constraint: string
        if (!is_null($resposta) && !is_string($resposta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resposta)), __LINE__);
        }
        $this->Resposta = $resposta;
        return $this;
    }
    /**
     * Get CampoLivre value
     * @return string|null
     */
    public function getCampoLivre()
    {
        return $this->CampoLivre;
    }
    /**
     * Set CampoLivre value
     * @param string $campoLivre
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\Questao
     */
    public function setCampoLivre($campoLivre = null)
    {
        // validation for constraint: string
        if (!is_null($campoLivre) && !is_string($campoLivre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campoLivre)), __LINE__);
        }
        $this->CampoLivre = $campoLivre;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\Questao
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
