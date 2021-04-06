<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaCadastroPF2 StructType
 * @subpackage Structs
 */
class ConsultaCadastroPF2 extends AbstractStructBase
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
     * @var string
     */
    public $OpcaoOperador;
    /**
     * The CPFConsumidor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
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
     * Constructor method for ConsultaCadastroPF2
     * @uses ConsultaCadastroPF2::setNrLocal()
     * @uses ConsultaCadastroPF2::setHoraLocal()
     * @uses ConsultaCadastroPF2::setNrCentral()
     * @uses ConsultaCadastroPF2::setHoraCentral()
     * @uses ConsultaCadastroPF2::setOrigemServico()
     * @uses ConsultaCadastroPF2::setIdOrigem()
     * @uses ConsultaCadastroPF2::setOpcaoOperador()
     * @uses ConsultaCadastroPF2::setCPFConsumidor()
     * @uses ConsultaCadastroPF2::setDataNascConsumidor()
     * @uses ConsultaCadastroPF2::setCartao()
     * @uses ConsultaCadastroPF2::setSeuSistema()
     * @uses ConsultaCadastroPF2::setSessao()
     * @uses ConsultaCadastroPF2::setCtlAP()
     * @uses ConsultaCadastroPF2::setAdministradora()
     * @uses ConsultaCadastroPF2::setTerminal()
     * @uses ConsultaCadastroPF2::setUsuario()
     * @uses ConsultaCadastroPF2::setControlePSW()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $origemServico
     * @param int $idOrigem
     * @param int $opcaoOperador
     * @param string $cPFConsumidor
     * @param string $dataNascConsumidor
     * @param int $cartao
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     * @param string $administradora
     * @param string $terminal
     * @param string $usuario
     * @param string $controlePSW
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $origemServico = null, $idOrigem = null, $opcaoOperador = null, $cPFConsumidor = null, $dataNascConsumidor = null, $cartao = null, $seuSistema = null, $sessao = null, $ctlAP = null, $administradora = null, $terminal = null, $usuario = null, $controlePSW = null)
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
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP)
            ->setAdministradora($administradora)
            ->setTerminal($terminal)
            ->setUsuario($usuario)
            ->setControlePSW($controlePSW);
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return string
     */
    public function getCPFConsumidor()
    {
        return $this->CPFConsumidor;
    }
    /**
     * Set CPFConsumidor value
     * @param string $cPFConsumidor
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * @return ConsultaCadastroPF2
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return ConsultaCadastroPF2
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
