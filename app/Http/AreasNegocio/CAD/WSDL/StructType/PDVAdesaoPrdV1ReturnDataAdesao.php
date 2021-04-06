<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfPrdAderido;
use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDVAdesaoPrdV1ReturnAdesaoData StructType
 * @subpackage Structs
 */
class PDVAdesaoPrdV1ReturnAdesaoData extends BaseWebServiceReturnAdesao
{
    /**
     * The CPFConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CPFConsumidor;
    /**
     * The DataNascConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataNascConsumidor;
    /**
     * The FlagCadastro
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FlagCadastro;
    /**
     * The Cartao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Cartao;
    /**
     * The Lista
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var ArrayOfPrdAderido
     */
    public $Lista;
    /**
     * Constructor method for PDVAdesaoPrdV1ReturnAdesaoData
     * @uses PDVAdesaoPrdV1ReturnAdesaoData::setCPFConsumidor()
     * @uses PDVAdesaoPrdV1ReturnAdesaoData::setDataNascConsumidor()
     * @uses PDVAdesaoPrdV1ReturnAdesaoData::setFlagCadastro()
     * @uses PDVAdesaoPrdV1ReturnAdesaoData::setCartao()
     * @uses PDVAdesaoPrdV1ReturnAdesaoData::setLista()
     * @param int $cPFConsumidor
     * @param string $dataNascConsumidor
     * @param int $flagCadastro
     * @param int $cartao
     * @param ArrayOfPrdAderido $lista
     */
    public function __construct($cPFConsumidor = null, $dataNascConsumidor = null, $flagCadastro = null, $cartao = null, ArrayOfPrdAderido $lista = null)
    {
        $this
            ->setCPFConsumidor($cPFConsumidor)
            ->setDataNascConsumidor($dataNascConsumidor)
            ->setFlagCadastro($flagCadastro)
            ->setCartao($cartao)
            ->setLista($lista);
    }
    /**
     * Get CPFConsumidor value
     * @return int
     */
    public function getCPFConsumidor()
    {
        return $this->CPFConsumidor;
    }
    /**
     * Set CPFConsumidor value
     * @param int $cPFConsumidor
     * @return PDVAdesaoPrdV1ReturnAdesaoData
     */
    public function setCPFConsumidor($cPFConsumidor = null)
    {
        // validation for constraint: int
        if (!is_null($cPFConsumidor) && !is_numeric($cPFConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cPFConsumidor)), __LINE__);
        }
        $this->CPFConsumidor = $cPFConsumidor;
        return $this;
    }
    /**
     * Get DataNascConsumidor value
     * @return string
     */
    public function getDataNascConsumidor()
    {
        return $this->DataNascConsumidor;
    }
    /**
     * Set DataNascConsumidor value
     * @param string $dataNascConsumidor
     * @return PDVAdesaoPrdV1ReturnAdesaoData
     */
    public function setDataNascConsumidor($dataNascConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($dataNascConsumidor) && !is_string($dataNascConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataNascConsumidor)), __LINE__);
        }
        $this->DataNascConsumidor = $dataNascConsumidor;
        return $this;
    }
    /**
     * Get FlagCadastro value
     * @return int
     */
    public function getFlagCadastro()
    {
        return $this->FlagCadastro;
    }
    /**
     * Set FlagCadastro value
     * @param int $flagCadastro
     * @return PDVAdesaoPrdV1ReturnAdesaoData
     */
    public function setFlagCadastro($flagCadastro = null)
    {
        // validation for constraint: int
        if (!is_null($flagCadastro) && !is_numeric($flagCadastro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($flagCadastro)), __LINE__);
        }
        $this->FlagCadastro = $flagCadastro;
        return $this;
    }
    /**
     * Get Cartao value
     * @return int
     */
    public function getCartao()
    {
        return $this->Cartao;
    }
    /**
     * Set Cartao value
     * @param int $cartao
     * @return PDVAdesaoPrdV1ReturnAdesaoData
     */
    public function setCartao($cartao = null)
    {
        // validation for constraint: int
        if (!is_null($cartao) && !is_numeric($cartao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cartao)), __LINE__);
        }
        $this->Cartao = $cartao;
        return $this;
    }
    /**
     * Get Lista value
     * @return ArrayOfPrdAderido|null
     */
    public function getLista()
    {
        return $this->Lista;
    }
    /**
     * Set Lista value
     * @param ArrayOfPrdAderido $lista
     * @return PDVAdesaoPrdV1ReturnAdesaoData
     */
    public function setLista(ArrayOfPrdAderido $lista = null)
    {
        $this->Lista = $lista;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return PDVAdesaoPrdV1ReturnAdesaoData
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
