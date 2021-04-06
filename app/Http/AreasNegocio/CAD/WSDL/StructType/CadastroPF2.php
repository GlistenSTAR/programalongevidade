<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CadastroPF2 StructType
 * @subpackage Structs
 */
class CadastroPF2 extends AbstractStructBase
{
    /**
     * The NrLocal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NrLocal;
    /**
     * The HoraLocal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HoraLocal;
    /**
     * The NrCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NrCentral;
    /**
     * The HoraCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HoraCentral;
    /**
     * The OrigemServico
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OrigemServico;
    /**
     * The IdOrigem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $IdOrigem;
    /**
     * The OpcaoOperador
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OpcaoOperador;
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
     * The SeuSistema
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SeuSistema;
    /**
     * The Sessao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sessao;
    /**
     * The CtlAP
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CtlAP;
    /**
     * The Administradora
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Administradora;
    /**
     * The Terminal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Terminal;
    /**
     * The Usuario
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Usuario;
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
     * The ControlePSW
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ControlePSW;
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
     * Constructor method for CadastroPF2
     * @uses CadastroPF2::setNrLocal()
     * @uses CadastroPF2::setHoraLocal()
     * @uses CadastroPF2::setNrCentral()
     * @uses CadastroPF2::setHoraCentral()
     * @uses CadastroPF2::setOrigemServico()
     * @uses CadastroPF2::setIdOrigem()
     * @uses CadastroPF2::setOpcaoOperador()
     * @uses CadastroPF2::setCPFConsumidor()
     * @uses CadastroPF2::setDataNascConsumidor()
     * @uses CadastroPF2::setSexo()
     * @uses CadastroPF2::setDDDCelular()
     * @uses CadastroPF2::setFoneCelular()
     * @uses CadastroPF2::setDDDFixo()
     * @uses CadastroPF2::setFoneFixo()
     * @uses CadastroPF2::setAceitaMaterialInformativo()
     * @uses CadastroPF2::setAceitaUsodosDados()
     * @uses CadastroPF2::setAceitaCorreio()
     * @uses CadastroPF2::setAceitaFone()
     * @uses CadastroPF2::setAceitaSMS()
     * @uses CadastroPF2::setAceitaEmail()
     * @uses CadastroPF2::setSeuSistema()
     * @uses CadastroPF2::setSessao()
     * @uses CadastroPF2::setCtlAP()
     * @uses CadastroPF2::setAdministradora()
     * @uses CadastroPF2::setTerminal()
     * @uses CadastroPF2::setUsuario()
     * @uses CadastroPF2::setNomeConsumidor()
     * @uses CadastroPF2::setCEPConsumidor()
     * @uses CadastroPF2::setUFConsumidor()
     * @uses CadastroPF2::setCidadeConsumidor()
     * @uses CadastroPF2::setBairroConsumidor()
     * @uses CadastroPF2::setTipoLogradouroConsumidor()
     * @uses CadastroPF2::setLogradouroConsumidor()
     * @uses CadastroPF2::setNrEnderConsumidor()
     * @uses CadastroPF2::setComplEnderConsumidor()
     * @uses CadastroPF2::setEmailConsumidor()
     * @uses CadastroPF2::setControlePSW()
     * @uses CadastroPF2::setResponsavel()
     * @uses CadastroPF2::setParentesco()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $origemServico
     * @param int $idOrigem
     * @param int $opcaoOperador
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
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     * @param string $administradora
     * @param string $terminal
     * @param string $usuario
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
     * @param string $controlePSW
     * @param string $responsavel
     * @param string $parentesco
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $origemServico = null, $idOrigem = null, $opcaoOperador = null, $cPFConsumidor = null, $dataNascConsumidor = null, $sexo = null, $dDDCelular = null, $foneCelular = null, $dDDFixo = null, $foneFixo = null, $aceitaMaterialInformativo = null, $aceitaUsodosDados = null, $aceitaCorreio = null, $aceitaFone = null, $aceitaSMS = null, $aceitaEmail = null, $seuSistema = null, $sessao = null, $ctlAP = null, $administradora = null, $terminal = null, $usuario = null, $nomeConsumidor = null, $cEPConsumidor = null, $uFConsumidor = null, $cidadeConsumidor = null, $bairroConsumidor = null, $tipoLogradouroConsumidor = null, $logradouroConsumidor = null, $nrEnderConsumidor = null, $complEnderConsumidor = null, $emailConsumidor = null, $controlePSW = null, $responsavel = null, $parentesco = null)
    {
        $this
            ->setNrLocal($nrLocal)
            ->setHoraLocal($horaLocal)
            ->setNrCentral($nrCentral)
            ->setHoraCentral($horaCentral)
            ->setOrigemServico($origemServico)
            ->setIdOrigem($idOrigem)
            ->setOpcaoOperador($opcaoOperador)
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
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP)
            ->setAdministradora($administradora)
            ->setTerminal($terminal)
            ->setUsuario($usuario)
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
            ->setControlePSW($controlePSW)
            ->setResponsavel($responsavel)
            ->setParentesco($parentesco);
    }
    /**
     * Get NrLocal value
     * @return int
     */
    public function getNrLocal()
    {
        return $this->NrLocal;
    }
    /**
     * Set NrLocal value
     * @param int $nrLocal
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setNrLocal($nrLocal = null)
    {
        // validation for constraint: int
        if (!is_null($nrLocal) && !is_numeric($nrLocal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nrLocal)), __LINE__);
        }
        $this->NrLocal = $nrLocal;
        return $this;
    }
    /**
     * Get HoraLocal value
     * @return string
     */
    public function getHoraLocal()
    {
        return $this->HoraLocal;
    }
    /**
     * Set HoraLocal value
     * @param string $horaLocal
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setHoraLocal($horaLocal = null)
    {
        // validation for constraint: string
        if (!is_null($horaLocal) && !is_string($horaLocal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horaLocal)), __LINE__);
        }
        $this->HoraLocal = $horaLocal;
        return $this;
    }
    /**
     * Get NrCentral value
     * @return int
     */
    public function getNrCentral()
    {
        return $this->NrCentral;
    }
    /**
     * Set NrCentral value
     * @param int $nrCentral
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setNrCentral($nrCentral = null)
    {
        // validation for constraint: int
        if (!is_null($nrCentral) && !is_numeric($nrCentral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nrCentral)), __LINE__);
        }
        $this->NrCentral = $nrCentral;
        return $this;
    }
    /**
     * Get HoraCentral value
     * @return string
     */
    public function getHoraCentral()
    {
        return $this->HoraCentral;
    }
    /**
     * Set HoraCentral value
     * @param string $horaCentral
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setHoraCentral($horaCentral = null)
    {
        // validation for constraint: string
        if (!is_null($horaCentral) && !is_string($horaCentral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horaCentral)), __LINE__);
        }
        $this->HoraCentral = $horaCentral;
        return $this;
    }
    /**
     * Get OrigemServico value
     * @return int
     */
    public function getOrigemServico()
    {
        return $this->OrigemServico;
    }
    /**
     * Set OrigemServico value
     * @param int $origemServico
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setOrigemServico($origemServico = null)
    {
        // validation for constraint: int
        if (!is_null($origemServico) && !is_numeric($origemServico)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($origemServico)), __LINE__);
        }
        $this->OrigemServico = $origemServico;
        return $this;
    }
    /**
     * Get IdOrigem value
     * @return int
     */
    public function getIdOrigem()
    {
        return $this->IdOrigem;
    }
    /**
     * Set IdOrigem value
     * @param int $idOrigem
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setIdOrigem($idOrigem = null)
    {
        // validation for constraint: int
        if (!is_null($idOrigem) && !is_numeric($idOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($idOrigem)), __LINE__);
        }
        $this->IdOrigem = $idOrigem;
        return $this;
    }
    /**
     * Get OpcaoOperador value
     * @return int
     */
    public function getOpcaoOperador()
    {
        return $this->OpcaoOperador;
    }
    /**
     * Set OpcaoOperador value
     * @param int $opcaoOperador
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setOpcaoOperador($opcaoOperador = null)
    {
        // validation for constraint: int
        if (!is_null($opcaoOperador) && !is_numeric($opcaoOperador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($opcaoOperador)), __LINE__);
        }
        $this->OpcaoOperador = $opcaoOperador;
        return $this;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @param string $dDDCelular
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setDDDCelular($dDDCelular = null)
    {
        // validation for constraint: int
        if (!is_null($dDDCelular) && !is_string($dDDCelular)) {
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @param string $dDDFixo
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setDDDFixo($dDDFixo = null)
    {
        // validation for constraint: int
        if (!is_null($dDDFixo) && !is_string($dDDFixo)) {
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * Get SeuSistema value
     * @return string|null
     */
    public function getSeuSistema()
    {
        return $this->SeuSistema;
    }
    /**
     * Set SeuSistema value
     * @param string $seuSistema
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setSeuSistema($seuSistema = null)
    {
        // validation for constraint: string
        if (!is_null($seuSistema) && !is_string($seuSistema)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seuSistema)), __LINE__);
        }
        $this->SeuSistema = $seuSistema;
        return $this;
    }
    /**
     * Get Sessao value
     * @return string|null
     */
    public function getSessao()
    {
        return $this->Sessao;
    }
    /**
     * Set Sessao value
     * @param string $sessao
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setSessao($sessao = null)
    {
        // validation for constraint: string
        if (!is_null($sessao) && !is_string($sessao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessao)), __LINE__);
        }
        $this->Sessao = $sessao;
        return $this;
    }
    /**
     * Get CtlAP value
     * @return string|null
     */
    public function getCtlAP()
    {
        return $this->CtlAP;
    }
    /**
     * Set CtlAP value
     * @param string $ctlAP
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setCtlAP($ctlAP = null)
    {
        // validation for constraint: string
        if (!is_null($ctlAP) && !is_string($ctlAP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ctlAP)), __LINE__);
        }
        $this->CtlAP = $ctlAP;
        return $this;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * Get Terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }
    /**
     * Set Terminal value
     * @param string $terminal
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminal)), __LINE__);
        }
        $this->Terminal = $terminal;
        return $this;
    }
    /**
     * Get Usuario value
     * @return string|null
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }
    /**
     * Set Usuario value
     * @param string $usuario
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setUsuario($usuario = null)
    {
        // validation for constraint: string
        if (!is_null($usuario) && !is_string($usuario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usuario)), __LINE__);
        }
        $this->Usuario = $usuario;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * Get ControlePSW value
     * @return string|null
     */
    public function getControlePSW()
    {
        return $this->ControlePSW;
    }
    /**
     * Set ControlePSW value
     * @param string $controlePSW
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
     */
    public function setControlePSW($controlePSW = null)
    {
        // validation for constraint: string
        if (!is_null($controlePSW) && !is_string($controlePSW)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($controlePSW)), __LINE__);
        }
        $this->ControlePSW = $controlePSW;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2
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
