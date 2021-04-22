<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDVConsultaCadastroPFV2ReturnData StructType
 * @subpackage Structs
 */
class PDVConsultaCadastroPFV2ReturnData extends BaseWebServiceReturnConsulta
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
     * The Sexo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Sexo;
    /**
     * The DDDCelular
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DDDCelular;
    /**
     * The FoneCelular
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FoneCelular;
    /**
     * The DDDFixo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DDDFixo;
    /**
     * The FoneFixo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FoneFixo;
    /**
     * The AceitaMaterialInformativo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaMaterialInformativo;
    /**
     * The AceitaUsodosDados
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaUsodosDados;
    /**
     * The AceitaCorreio
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaCorreio;
    /**
     * The AceitaFone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaFone;
    /**
     * The AceitaSMS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaSMS;
    /**
     * The AceitaEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AceitaEmail;
    /**
     * The FlagCadastro
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FlagCadastro;
    /**
     * The NomeConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NomeConsumidor;
    /**
     * The CEPConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CEPConsumidor;
    /**
     * The UFConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UFConsumidor;
    /**
     * The CidadeConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CidadeConsumidor;
    /**
     * The BairroConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BairroConsumidor;
    /**
     * The TipoLogradouroConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TipoLogradouroConsumidor;
    /**
     * The LogradouroConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LogradouroConsumidor;
    /**
     * The NrEnderConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NrEnderConsumidor;
    /**
     * The ComplEnderConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ComplEnderConsumidor;
    /**
     * The EmailConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailConsumidor;
    /**
     * The Responsavel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Responsavel;
    /**
     * The Parentesco
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Parentesco;
    /**
     * Constructor method for PDVConsultaCadastroPFV2ReturnData
     * @uses PDVConsultaCadastroPFV2ReturnData::setCPFConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setDataNascConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setSexo()
     * @uses PDVConsultaCadastroPFV2ReturnData::setDDDCelular()
     * @uses PDVConsultaCadastroPFV2ReturnData::setFoneCelular()
     * @uses PDVConsultaCadastroPFV2ReturnData::setDDDFixo()
     * @uses PDVConsultaCadastroPFV2ReturnData::setFoneFixo()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaMaterialInformativo()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaUsodosDados()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaCorreio()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaFone()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaSMS()
     * @uses PDVConsultaCadastroPFV2ReturnData::setAceitaEmail()
     * @uses PDVConsultaCadastroPFV2ReturnData::setFlagCadastro()
     * @uses PDVConsultaCadastroPFV2ReturnData::setNomeConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setCEPConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setUFConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setCidadeConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setBairroConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setTipoLogradouroConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setLogradouroConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setNrEnderConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setComplEnderConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setEmailConsumidor()
     * @uses PDVConsultaCadastroPFV2ReturnData::setResponsavel()
     * @uses PDVConsultaCadastroPFV2ReturnData::setParentesco()
     * @param int $cPFConsumidor
     * @param string $dataNascConsumidor
     * @param int $sexo
     * @param int $dDDCelular
     * @param int $foneCelular
     * @param int $dDDFixo
     * @param int $foneFixo
     * @param int $aceitaMaterialInformativo
     * @param int $aceitaUsodosDados
     * @param int $aceitaCorreio
     * @param int $aceitaFone
     * @param int $aceitaSMS
     * @param int $aceitaEmail
     * @param int $flagCadastro
     * @param string $nomeConsumidor
     * @param string $cEPConsumidor
     * @param string $uFConsumidor
     * @param string $cidadeConsumidor
     * @param string $bairroConsumidor
     * @param string $tipoLogradouroConsumidor
     * @param string $logradouroConsumidor
     * @param string $nrEnderConsumidor
     * @param string $complEnderConsumidor
     * @param string $emailConsumidor
     * @param string $responsavel
     * @param string $parentesco
     */
    public function __construct($cPFConsumidor = null, $dataNascConsumidor = null, $sexo = null, $dDDCelular = null, $foneCelular = null, $dDDFixo = null, $foneFixo = null, $aceitaMaterialInformativo = null, $aceitaUsodosDados = null, $aceitaCorreio = null, $aceitaFone = null, $aceitaSMS = null, $aceitaEmail = null, $flagCadastro = null, $nomeConsumidor = null, $cEPConsumidor = null, $uFConsumidor = null, $cidadeConsumidor = null, $bairroConsumidor = null, $tipoLogradouroConsumidor = null, $logradouroConsumidor = null, $nrEnderConsumidor = null, $complEnderConsumidor = null, $emailConsumidor = null, $responsavel = null, $parentesco = null)
    {
        $this
            ->setCPFConsumidor($cPFConsumidor)
            ->setDataNascConsumidor($dataNascConsumidor)
            ->setSexo($sexo)
            ->setDDDCelular($dDDCelular)
            ->setFoneCelular($foneCelular)
            ->setDDDFixo($dDDFixo)
            ->setFoneFixo($foneFixo)
            ->setAceitaMaterialInformativo($aceitaMaterialInformativo)
            ->setAceitaUsodosDados($aceitaUsodosDados)
            ->setAceitaCorreio($aceitaCorreio)
            ->setAceitaFone($aceitaFone)
            ->setAceitaSMS($aceitaSMS)
            ->setAceitaEmail($aceitaEmail)
            ->setFlagCadastro($flagCadastro)
            ->setNomeConsumidor($nomeConsumidor)
            ->setCEPConsumidor($cEPConsumidor)
            ->setUFConsumidor($uFConsumidor)
            ->setCidadeConsumidor($cidadeConsumidor)
            ->setBairroConsumidor($bairroConsumidor)
            ->setTipoLogradouroConsumidor($tipoLogradouroConsumidor)
            ->setLogradouroConsumidor($logradouroConsumidor)
            ->setNrEnderConsumidor($nrEnderConsumidor)
            ->setComplEnderConsumidor($complEnderConsumidor)
            ->setEmailConsumidor($emailConsumidor)
            ->setResponsavel($responsavel)
            ->setParentesco($parentesco);
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
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
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
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
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
     * Get Sexo value
     * @return int
     */
    public function getSexo()
    {
        return $this->Sexo;
    }
    /**
     * Set Sexo value
     * @param int $sexo
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setSexo($sexo = null)
    {
        // validation for constraint: int
        if (!is_null($sexo) && !is_numeric($sexo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sexo)), __LINE__);
        }
        $this->Sexo = $sexo;
        return $this;
    }
    /**
     * Get DDDCelular value
     * @return int
     */
    public function getDDDCelular()
    {
        return $this->DDDCelular;
    }
    /**
     * Set DDDCelular value
     * @param int $dDDCelular
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setDDDCelular($dDDCelular = null)
    {
        // validation for constraint: int
        if (!is_null($dDDCelular) && !is_numeric($dDDCelular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dDDCelular)), __LINE__);
        }
        $this->DDDCelular = $dDDCelular;
        return $this;
    }
    /**
     * Get FoneCelular value
     * @return int
     */
    public function getFoneCelular()
    {
        return $this->FoneCelular;
    }
    /**
     * Set FoneCelular value
     * @param int $foneCelular
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setFoneCelular($foneCelular = null)
    {
        // validation for constraint: int
        if (!is_null($foneCelular) && !is_numeric($foneCelular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($foneCelular)), __LINE__);
        }
        $this->FoneCelular = $foneCelular;
        return $this;
    }
    /**
     * Get DDDFixo value
     * @return int
     */
    public function getDDDFixo()
    {
        return $this->DDDFixo;
    }
    /**
     * Set DDDFixo value
     * @param int $dDDFixo
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setDDDFixo($dDDFixo = null)
    {
        // validation for constraint: int
        if (!is_null($dDDFixo) && !is_numeric($dDDFixo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dDDFixo)), __LINE__);
        }
        $this->DDDFixo = $dDDFixo;
        return $this;
    }
    /**
     * Get FoneFixo value
     * @return int
     */
    public function getFoneFixo()
    {
        return $this->FoneFixo;
    }
    /**
     * Set FoneFixo value
     * @param int $foneFixo
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setFoneFixo($foneFixo = null)
    {
        // validation for constraint: int
        if (!is_null($foneFixo) && !is_numeric($foneFixo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($foneFixo)), __LINE__);
        }
        $this->FoneFixo = $foneFixo;
        return $this;
    }
    /**
     * Get AceitaMaterialInformativo value
     * @return int
     */
    public function getAceitaMaterialInformativo()
    {
        return $this->AceitaMaterialInformativo;
    }
    /**
     * Set AceitaMaterialInformativo value
     * @param int $aceitaMaterialInformativo
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaMaterialInformativo($aceitaMaterialInformativo = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaMaterialInformativo) && !is_numeric($aceitaMaterialInformativo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaMaterialInformativo)), __LINE__);
        }
        $this->AceitaMaterialInformativo = $aceitaMaterialInformativo;
        return $this;
    }
    /**
     * Get AceitaUsodosDados value
     * @return int
     */
    public function getAceitaUsodosDados()
    {
        return $this->AceitaUsodosDados;
    }
    /**
     * Set AceitaUsodosDados value
     * @param int $aceitaUsodosDados
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaUsodosDados($aceitaUsodosDados = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaUsodosDados) && !is_numeric($aceitaUsodosDados)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaUsodosDados)), __LINE__);
        }
        $this->AceitaUsodosDados = $aceitaUsodosDados;
        return $this;
    }
    /**
     * Get AceitaCorreio value
     * @return int
     */
    public function getAceitaCorreio()
    {
        return $this->AceitaCorreio;
    }
    /**
     * Set AceitaCorreio value
     * @param int $aceitaCorreio
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaCorreio($aceitaCorreio = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaCorreio) && !is_numeric($aceitaCorreio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaCorreio)), __LINE__);
        }
        $this->AceitaCorreio = $aceitaCorreio;
        return $this;
    }
    /**
     * Get AceitaFone value
     * @return int
     */
    public function getAceitaFone()
    {
        return $this->AceitaFone;
    }
    /**
     * Set AceitaFone value
     * @param int $aceitaFone
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaFone($aceitaFone = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaFone) && !is_numeric($aceitaFone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaFone)), __LINE__);
        }
        $this->AceitaFone = $aceitaFone;
        return $this;
    }
    /**
     * Get AceitaSMS value
     * @return int
     */
    public function getAceitaSMS()
    {
        return $this->AceitaSMS;
    }
    /**
     * Set AceitaSMS value
     * @param int $aceitaSMS
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaSMS($aceitaSMS = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaSMS) && !is_numeric($aceitaSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaSMS)), __LINE__);
        }
        $this->AceitaSMS = $aceitaSMS;
        return $this;
    }
    /**
     * Get AceitaEmail value
     * @return int
     */
    public function getAceitaEmail()
    {
        return $this->AceitaEmail;
    }
    /**
     * Set AceitaEmail value
     * @param int $aceitaEmail
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setAceitaEmail($aceitaEmail = null)
    {
        // validation for constraint: int
        if (!is_null($aceitaEmail) && !is_numeric($aceitaEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aceitaEmail)), __LINE__);
        }
        $this->AceitaEmail = $aceitaEmail;
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
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
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
     * Get NomeConsumidor value
     * @return string|null
     */
    public function getNomeConsumidor()
    {
        return $this->NomeConsumidor;
    }
    /**
     * Set NomeConsumidor value
     * @param string $nomeConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setNomeConsumidor($nomeConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($nomeConsumidor) && !is_string($nomeConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nomeConsumidor)), __LINE__);
        }
        $this->NomeConsumidor = $nomeConsumidor;
        return $this;
    }
    /**
     * Get CEPConsumidor value
     * @return string|null
     */
    public function getCEPConsumidor()
    {
        return $this->CEPConsumidor;
    }
    /**
     * Set CEPConsumidor value
     * @param string $cEPConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setCEPConsumidor($cEPConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($cEPConsumidor) && !is_string($cEPConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cEPConsumidor)), __LINE__);
        }
        $this->CEPConsumidor = $cEPConsumidor;
        return $this;
    }
    /**
     * Get UFConsumidor value
     * @return string|null
     */
    public function getUFConsumidor()
    {
        return $this->UFConsumidor;
    }
    /**
     * Set UFConsumidor value
     * @param string $uFConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setUFConsumidor($uFConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($uFConsumidor) && !is_string($uFConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uFConsumidor)), __LINE__);
        }
        $this->UFConsumidor = $uFConsumidor;
        return $this;
    }
    /**
     * Get CidadeConsumidor value
     * @return string|null
     */
    public function getCidadeConsumidor()
    {
        return $this->CidadeConsumidor;
    }
    /**
     * Set CidadeConsumidor value
     * @param string $cidadeConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setCidadeConsumidor($cidadeConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($cidadeConsumidor) && !is_string($cidadeConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cidadeConsumidor)), __LINE__);
        }
        $this->CidadeConsumidor = $cidadeConsumidor;
        return $this;
    }
    /**
     * Get BairroConsumidor value
     * @return string|null
     */
    public function getBairroConsumidor()
    {
        return $this->BairroConsumidor;
    }
    /**
     * Set BairroConsumidor value
     * @param string $bairroConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setBairroConsumidor($bairroConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($bairroConsumidor) && !is_string($bairroConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bairroConsumidor)), __LINE__);
        }
        $this->BairroConsumidor = $bairroConsumidor;
        return $this;
    }
    /**
     * Get TipoLogradouroConsumidor value
     * @return string|null
     */
    public function getTipoLogradouroConsumidor()
    {
        return $this->TipoLogradouroConsumidor;
    }
    /**
     * Set TipoLogradouroConsumidor value
     * @param string $tipoLogradouroConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setTipoLogradouroConsumidor($tipoLogradouroConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($tipoLogradouroConsumidor) && !is_string($tipoLogradouroConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tipoLogradouroConsumidor)), __LINE__);
        }
        $this->TipoLogradouroConsumidor = $tipoLogradouroConsumidor;
        return $this;
    }
    /**
     * Get LogradouroConsumidor value
     * @return string|null
     */
    public function getLogradouroConsumidor()
    {
        return $this->LogradouroConsumidor;
    }
    /**
     * Set LogradouroConsumidor value
     * @param string $logradouroConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setLogradouroConsumidor($logradouroConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($logradouroConsumidor) && !is_string($logradouroConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logradouroConsumidor)), __LINE__);
        }
        $this->LogradouroConsumidor = $logradouroConsumidor;
        return $this;
    }
    /**
     * Get NrEnderConsumidor value
     * @return string|null
     */
    public function getNrEnderConsumidor()
    {
        return $this->NrEnderConsumidor;
    }
    /**
     * Set NrEnderConsumidor value
     * @param string $nrEnderConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setNrEnderConsumidor($nrEnderConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($nrEnderConsumidor) && !is_string($nrEnderConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nrEnderConsumidor)), __LINE__);
        }
        $this->NrEnderConsumidor = $nrEnderConsumidor;
        return $this;
    }
    /**
     * Get ComplEnderConsumidor value
     * @return string|null
     */
    public function getComplEnderConsumidor()
    {
        return $this->ComplEnderConsumidor;
    }
    /**
     * Set ComplEnderConsumidor value
     * @param string $complEnderConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setComplEnderConsumidor($complEnderConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($complEnderConsumidor) && !is_string($complEnderConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($complEnderConsumidor)), __LINE__);
        }
        $this->ComplEnderConsumidor = $complEnderConsumidor;
        return $this;
    }
    /**
     * Get EmailConsumidor value
     * @return string|null
     */
    public function getEmailConsumidor()
    {
        return $this->EmailConsumidor;
    }
    /**
     * Set EmailConsumidor value
     * @param string $emailConsumidor
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setEmailConsumidor($emailConsumidor = null)
    {
        // validation for constraint: string
        if (!is_null($emailConsumidor) && !is_string($emailConsumidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailConsumidor)), __LINE__);
        }
        $this->EmailConsumidor = $emailConsumidor;
        return $this;
    }
    /**
     * Get Responsavel value
     * @return string|null
     */
    public function getResponsavel()
    {
        return $this->Responsavel;
    }
    /**
     * Set Responsavel value
     * @param string $responsavel
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setResponsavel($responsavel = null)
    {
        // validation for constraint: string
        if (!is_null($responsavel) && !is_string($responsavel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responsavel)), __LINE__);
        }
        $this->Responsavel = $responsavel;
        return $this;
    }
    /**
     * Get Parentesco value
     * @return string|null
     */
    public function getParentesco()
    {
        return $this->Parentesco;
    }
    /**
     * Set Parentesco value
     * @param string $parentesco
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
     */
    public function setParentesco($parentesco = null)
    {
        // validation for constraint: string
        if (!is_null($parentesco) && !is_string($parentesco)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentesco)), __LINE__);
        }
        $this->Parentesco = $parentesco;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDVConsultaCadastroPFV2ReturnData
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
