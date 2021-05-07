<?php
namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AceiteTermo StructType
 * @subpackage Structs
 */
class AceiteTermo extends AbstractStructBase
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
     * The DDDCelular
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DDDCelular;
    /**
     * The FoneCelular
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FoneCelular;
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
     * The VersaoTermo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VersaoTermo;
    /**
     * The TipoEvidencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TipoEvidencia;
    /**
     * The CodigoEvidencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CodigoEvidencia;
    /**
     * The Ip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ip;
    /**
     * Constructor method for AceiteTermo
     * @uses AceiteTermo::setNrLocal()
     * @uses AceiteTermo::setHoraLocal()
     * @uses AceiteTermo::setNrCentral()
     * @uses AceiteTermo::setHoraCentral()
     * @uses AceiteTermo::setOrigemServico()
     * @uses AceiteTermo::setIdOrigem()
     * @uses AceiteTermo::setOpcaoOperador()
     * @uses AceiteTermo::setCPFConsumidor()
     * @uses AceiteTermo::setDDDCelular()
     * @uses AceiteTermo::setFoneCelular()
     * @uses AceiteTermo::setSeuSistema()
     * @uses AceiteTermo::setSessao()
     * @uses AceiteTermo::setCtlAP()
     * @uses AceiteTermo::setAdministradora()
     * @uses AceiteTermo::setTerminal()
     * @uses AceiteTermo::setUsuario()
     * @uses AceiteTermo::setVersaoTermo()
     * @uses AceiteTermo::setTipoEvidencia()
     * @uses AceiteTermo::setCodigoEvidencia()
     * @uses AceiteTermo::setIp()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $origemServico
     * @param int $idOrigem
     * @param int $opcaoOperador
     * @param int $cPFConsumidor
     * @param int $dDDCelular
     * @param int $foneCelular
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     * @param string $administradora
     * @param string $terminal
     * @param string $usuario
     * @param string $versaoTermo
     * @param string $tipoEvidencia
     * @param string $codigoEvidencia
     * @param string $ip
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $origemServico = null, $idOrigem = null, $opcaoOperador = null, $cPFConsumidor = null, $dDDCelular = null, $foneCelular = null, $seuSistema = null, $sessao = null, $ctlAP = null, $administradora = null, $terminal = null, $usuario = null, $versaoTermo = null, $tipoEvidencia = null, $codigoEvidencia = null, $ip = null)
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
            ->setDDDCelular($dDDCelular)
            ->setFoneCelular($foneCelular)
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP)
            ->setAdministradora($administradora)
            ->setTerminal($terminal)
            ->setUsuario($usuario)
            ->setVersaoTermo($versaoTermo)
            ->setTipoEvidencia($tipoEvidencia)
            ->setCodigoEvidencia($codigoEvidencia)
            ->setIp($ip);
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
     */
    public function setDDDCelular($dDDCelular = null)
    {
        // validation for constraint: int
        if (!is_null($dDDCelular) && !(is_int($dDDCelular) || ctype_digit($dDDCelular))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dDDCelular, true), gettype($dDDCelular)), __LINE__);
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
     * @return AceiteTermo
     */
    public function setFoneCelular($foneCelular = null)
    {
        // validation for constraint: int
        if (!is_null($foneCelular) && !(is_int($foneCelular) || ctype_digit($foneCelular))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($foneCelular, true), gettype($foneCelular)), __LINE__);
        }
        $this->FoneCelular = $foneCelular;
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
     * @return AceiteTermo
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
    /**
     * Get VersaoTermo value
     * @return string|null
     */
    public function getVersaoTermo()
    {
        return $this->VersaoTermo;
    }
    /**
     * Set VersaoTermo value
     * @param string $versaoTermo
     * @return AceiteTermo
     */
    public function setVersaoTermo($versaoTermo = null)
    {
        // validation for constraint: string
        if (!is_null($versaoTermo) && !is_string($versaoTermo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versaoTermo, true), gettype($versaoTermo)), __LINE__);
        }
        $this->VersaoTermo = $versaoTermo;
        return $this;
    }
    /**
     * Get TipoEvidencia value
     * @return string|null
     */
    public function getTipoEvidencia()
    {
        return $this->TipoEvidencia;
    }
    /**
     * Set TipoEvidencia value
     * @param string $tipoEvidencia
     * @return AceiteTermo
     */
    public function setTipoEvidencia($tipoEvidencia = null)
    {
        // validation for constraint: string
        if (!is_null($tipoEvidencia) && !is_string($tipoEvidencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoEvidencia, true), gettype($tipoEvidencia)), __LINE__);
        }
        $this->TipoEvidencia = $tipoEvidencia;
        return $this;
    }
    /**
     * Get CodigoEvidencia value
     * @return string|null
     */
    public function getCodigoEvidencia()
    {
        return $this->CodigoEvidencia;
    }
    /**
     * Set CodigoEvidencia value
     * @param string $codigoEvidencia
     * @return AceiteTermo
     */
    public function setCodigoEvidencia($codigoEvidencia = null)
    {
        // validation for constraint: string
        if (!is_null($codigoEvidencia) && !is_string($codigoEvidencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoEvidencia, true), gettype($codigoEvidencia)), __LINE__);
        }
        $this->CodigoEvidencia = $codigoEvidencia;
        return $this;
    }
    /**
     * Get Ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->Ip;
    }
    /**
     * Set Ip value
     * @param string $ip
     * @return AceiteTermo
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->Ip = $ip;
        return $this;
    }
}
