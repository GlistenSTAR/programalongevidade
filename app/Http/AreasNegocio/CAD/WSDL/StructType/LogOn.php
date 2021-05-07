<?php
namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;


/**
 * This class stands for LogOn StructType
 * @package LogOn
 * @subpackage Structs
 */
class LogOn extends AbstractStructBase
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
     * The VersaoTabela
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VersaoTabela;
    /**
     * The VersaoInterface
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VersaoInterface;
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
     * Constructor method for LogOn
     * @uses LogOn::setNrLocal()
     * @uses LogOn::setHoraLocal()
     * @uses LogOn::setNrCentral()
     * @uses LogOn::setHoraCentral()
     * @uses LogOn::setVersaoTabela()
     * @uses LogOn::setVersaoInterface()
     * @uses LogOn::setSeuSistema()
     * @uses LogOn::setSessao()
     * @uses LogOn::setCtlAP()
     * @param int $nrLocal
     * @param string $horaLocal
     * @param int $nrCentral
     * @param string $horaCentral
     * @param int $versaoTabela
     * @param int $versaoInterface
     * @param string $seuSistema
     * @param string $sessao
     * @param string $ctlAP
     */
    public function __construct($nrLocal = null, $horaLocal = null, $nrCentral = null, $horaCentral = null, $versaoTabela = null, $versaoInterface = null, $seuSistema = null, $sessao = null, $ctlAP = null)
    {
        $this
            ->setNrLocal($nrLocal)
            ->setHoraLocal($horaLocal)
            ->setNrCentral($nrCentral)
            ->setHoraCentral($horaCentral)
            ->setVersaoTabela($versaoTabela)
            ->setVersaoInterface($versaoInterface)
            ->setSeuSistema($seuSistema)
            ->setSessao($sessao)
            ->setCtlAP($ctlAP);
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * Get VersaoTabela value
     * @return int
     */
    public function getVersaoTabela()
    {
        return $this->VersaoTabela;
    }
    /**
     * Set VersaoTabela value
     * @param int $versaoTabela
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
     */
    public function setVersaoTabela($versaoTabela = null)
    {
        // validation for constraint: int
        if (!is_null($versaoTabela) && !is_numeric($versaoTabela)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versaoTabela)), __LINE__);
        }
        $this->VersaoTabela = $versaoTabela;
        return $this;
    }
    /**
     * Get VersaoInterface value
     * @return int
     */
    public function getVersaoInterface()
    {
        return $this->VersaoInterface;
    }
    /**
     * Set VersaoInterface value
     * @param int $versaoInterface
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
     */
    public function setVersaoInterface($versaoInterface = null)
    {
        // validation for constraint: int
        if (!is_null($versaoInterface) && !is_numeric($versaoInterface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versaoInterface)), __LINE__);
        }
        $this->VersaoInterface = $versaoInterface;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOn
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
