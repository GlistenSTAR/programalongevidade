<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;


use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListaAceite StructType
 * @subpackage Structs
 */
class ListaAceite extends AbstractStructBase
{
    /**
     * The NrLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NrLocal;
    /**
     * The HoraLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HoraLocal;
    /**
     * The NrCentral
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NrCentral;
    /**
     * The HoraCentral
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HoraCentral;
    /**
     * The OrigemServico
     * Meta information extracted from the WSDL
     * - base: s:unsignedShort
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OrigemServico;
    /**
     * The IdOrigem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $IdOrigem;
    /**
     * The OpcaoOperador
     * Meta information extracted from the WSDL
     * - base: s:unsignedShort
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OpcaoOperador;
    /**
     * The CPFConsumidor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CPFConsumidor;
    /**
     * The SeuSistema
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SeuSistema;
    /**
     * The Sessao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sessao;
    /**
     * The CtlAP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CtlAP;
    /**
     * The Administradora
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Administradora;
    /**
     * The Terminal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Terminal;
    /**
     * The Usuario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Usuario;
    /**
     * Constructor method for ListaAceite
     * @uses ListaAceite::setNrLocal()
     * @uses ListaAceite::setHoraLocal()
     * @uses ListaAceite::setNrCentral()
     * @uses ListaAceite::setHoraCentral()
     * @uses ListaAceite::setOrigemServico()
     * @uses ListaAceite::setIdOrigem()
     * @uses ListaAceite::setOpcaoOperador()
     * @uses ListaAceite::setCPFConsumidor()
     * @uses ListaAceite::setSeuSistema()
     * @uses ListaAceite::setSessao()
     * @uses ListaAceite::setCtlAP()
     * @uses ListaAceite::setAdministradora()
     * @uses ListaAceite::setTerminal()
     * @uses ListaAceite::setUsuario()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $origemServico
     * @param int $idOrigem
     * @param int $opcaoOperador
     * @param int $cPFConsumidor
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     * @param string $administradora
     * @param string $terminal
     * @param string $usuario
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $origemServico = null, $idOrigem = null, $opcaoOperador = null, $cPFConsumidor = null, $seuSistema = null, $sessao = null, $ctlAP = null, $administradora = null, $terminal = null, $usuario = null)
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
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP)
            ->setAdministradora($administradora)
            ->setTerminal($terminal)
            ->setUsuario($usuario);
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
     * @return \StructType\ListaAceite
     */
    public function setNrLocal($nrLocal = null)
    {
        // validation for constraint: int
        if (!is_null($nrLocal) && !(is_int($nrLocal) || ctype_digit($nrLocal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nrLocal, true), gettype($nrLocal)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setHoraLocal($horaLocal = null)
    {
        // validation for constraint: string
        if (!is_null($horaLocal) && !is_string($horaLocal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horaLocal, true), gettype($horaLocal)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setNrCentral($nrCentral = null)
    {
        // validation for constraint: int
        if (!is_null($nrCentral) && !(is_int($nrCentral) || ctype_digit($nrCentral))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nrCentral, true), gettype($nrCentral)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setHoraCentral($horaCentral = null)
    {
        // validation for constraint: string
        if (!is_null($horaCentral) && !is_string($horaCentral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horaCentral, true), gettype($horaCentral)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setOrigemServico($origemServico = null)
    {
        // validation for constraint: int
        if (!is_null($origemServico) && !(is_int($origemServico) || ctype_digit($origemServico))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($origemServico, true), gettype($origemServico)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setIdOrigem($idOrigem = null)
    {
        // validation for constraint: int
        if (!is_null($idOrigem) && !(is_int($idOrigem) || ctype_digit($idOrigem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idOrigem, true), gettype($idOrigem)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setOpcaoOperador($opcaoOperador = null)
    {
        // validation for constraint: int
        if (!is_null($opcaoOperador) && !(is_int($opcaoOperador) || ctype_digit($opcaoOperador))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opcaoOperador, true), gettype($opcaoOperador)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setCPFConsumidor($cPFConsumidor = null)
    {
        // validation for constraint: int
        if (!is_null($cPFConsumidor) && !(is_int($cPFConsumidor) || ctype_digit($cPFConsumidor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cPFConsumidor, true), gettype($cPFConsumidor)), __LINE__);
        }
        $this->CPFConsumidor = $cPFConsumidor;
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
     * @return \StructType\ListaAceite
     */
    public function setSeuSistema($seuSistema = null)
    {
        // validation for constraint: string
        if (!is_null($seuSistema) && !is_string($seuSistema)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seuSistema, true), gettype($seuSistema)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setSessao($sessao = null)
    {
        // validation for constraint: string
        if (!is_null($sessao) && !is_string($sessao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessao, true), gettype($sessao)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setCtlAP($ctlAP = null)
    {
        // validation for constraint: string
        if (!is_null($ctlAP) && !is_string($ctlAP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ctlAP, true), gettype($ctlAP)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setAdministradora($administradora = null)
    {
        // validation for constraint: string
        if (!is_null($administradora) && !is_string($administradora)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($administradora, true), gettype($administradora)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminal, true), gettype($terminal)), __LINE__);
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
     * @return \StructType\ListaAceite
     */
    public function setUsuario($usuario = null)
    {
        // validation for constraint: string
        if (!is_null($usuario) && !is_string($usuario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usuario, true), gettype($usuario)), __LINE__);
        }
        $this->Usuario = $usuario;
        return $this;
    }
}
