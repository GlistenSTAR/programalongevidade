<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdesaoPrd StructType
 * @subpackage Structs
 */
class AdesaoPrd extends AbstractStructBase
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
     * The Cartao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Cartao;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EAN;
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
     * The ControlePSW
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ControlePSW;
    /**
     * The Campanha
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Campanha;
    /**
     * The CodigoProfissional
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CodigoProfissional;
    /**
     * The UFProfissional
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UFProfissional;
    /**
     * The NomeProfissional
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NomeProfissional;
    /**
     * The Lista
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao
     */
    public $Lista;
    /**
     * Constructor method for AdesaoPrd
     * @uses AdesaoPrd::setNrLocal()
     * @uses AdesaoPrd::setHoraLocal()
     * @uses AdesaoPrd::setNrCentral()
     * @uses AdesaoPrd::setHoraCentral()
     * @uses AdesaoPrd::setOrigemServico()
     * @uses AdesaoPrd::setIdOrigem()
     * @uses AdesaoPrd::setOpcaoOperador()
     * @uses AdesaoPrd::setCPFConsumidor()
     * @uses AdesaoPrd::setDataNascConsumidor()
     * @uses AdesaoPrd::setCartao()
     * @uses AdesaoPrd::setEAN()
     * @uses AdesaoPrd::setSeuSistema()
     * @uses AdesaoPrd::setSessao()
     * @uses AdesaoPrd::setCtlAP()
     * @uses AdesaoPrd::setAdministradora()
     * @uses AdesaoPrd::setTerminal()
     * @uses AdesaoPrd::setUsuario()
     * @uses AdesaoPrd::setControlePSW()
     * @uses AdesaoPrd::setCampanha()
     * @uses AdesaoPrd::setCodigoProfissional()
     * @uses AdesaoPrd::setUFProfissional()
     * @uses AdesaoPrd::setNomeProfissional()
     * @uses AdesaoPrd::setLista()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $origemServico
     * @param int $idOrigem
     * @param int $opcaoOperador
     * @param int $cPFConsumidor
     * @param string $dataNascConsumidor
     * @param int $cartao
     * @param int $eAN
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     * @param string $administradora
     * @param string $terminal
     * @param string $usuario
     * @param string $controlePSW
     * @param string $campanha
     * @param string $codigoProfissional
     * @param string $uFProfissional
     * @param string $nomeProfissional
     * @param \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao $lista
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $origemServico = null, $idOrigem = null, $opcaoOperador = null, $cPFConsumidor = null, $dataNascConsumidor = null, $cartao = null, $eAN = null, $seuSistema = null, $sessao = null, $ctlAP = null, $administradora = null, $terminal = null, $usuario = null, $controlePSW = null, $campanha = null, $codigoProfissional = null, $uFProfissional = null, $nomeProfissional = null, \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao $lista = null)
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
            ->setCartao($cartao)
            ->setEAN($eAN)
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP)
            ->setAdministradora($administradora)
            ->setTerminal($terminal)
            ->setUsuario($usuario)
            ->setControlePSW($controlePSW)
            ->setCampanha($campanha)
            ->setCodigoProfissional($codigoProfissional)
            ->setUFProfissional($uFProfissional)
            ->setNomeProfissional($nomeProfissional)
            ->setLista($lista);
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
     * Get CodigoProfissional value
     * @return string|null
     */
    public function getCodigoProfissional()
    {
        return $this->CodigoProfissional;
    }
    /**
     * Set CodigoProfissional value
     * @param string $codigoProfissional
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
     */
    public function setCodigoProfissional($codigoProfissional = null)
    {
        // validation for constraint: string
        if (!is_null($codigoProfissional) && !is_string($codigoProfissional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codigoProfissional)), __LINE__);
        }
        $this->CodigoProfissional = $codigoProfissional;
        return $this;
    }
    /**
     * Get UFProfissional value
     * @return string|null
     */
    public function getUFProfissional()
    {
        return $this->UFProfissional;
    }
    /**
     * Set UFProfissional value
     * @param string $uFProfissional
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
     */
    public function setUFProfissional($uFProfissional = null)
    {
        // validation for constraint: string
        if (!is_null($uFProfissional) && !is_string($uFProfissional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uFProfissional)), __LINE__);
        }
        $this->UFProfissional = $uFProfissional;
        return $this;
    }
    /**
     * Get NomeProfissional value
     * @return string|null
     */
    public function getNomeProfissional()
    {
        return $this->NomeProfissional;
    }
    /**
     * Set NomeProfissional value
     * @param string $nomeProfissional
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
     */
    public function setNomeProfissional($nomeProfissional = null)
    {
        // validation for constraint: string
        if (!is_null($nomeProfissional) && !is_string($nomeProfissional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nomeProfissional)), __LINE__);
        }
        $this->NomeProfissional = $nomeProfissional;
        return $this;
    }
    /**
     * Get Lista value
     * @return \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao|null
     */
    public function getLista()
    {
        return $this->Lista;
    }
    /**
     * Set Lista value
     * @param \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao $lista
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
     */
    public function setLista(\App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao $lista = null)
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd
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
