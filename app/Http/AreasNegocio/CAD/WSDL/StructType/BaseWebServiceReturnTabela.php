<?php
namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for baseWebServiceReturn StructType
 * @subpackage Structs
 */
class BaseWebServiceReturnTabela extends AbstractStructBase
{
    /**
     * The StatusServico
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StatusServico;
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
     * The HoraCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HoraCentral;
    /**
     * The NrCentral
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NrCentral;
    /**
     * The RetCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetCode;
    /**
     * The TextoInformativo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TextoInformativo;
    /**
     * The SeuSistema
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SeuSistema;
    /**
     * The NrControleLocal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NrControleLocal;
    /**
     * The Sessao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sessao;
    /**
     * The DesvioFluxo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DesvioFluxo;
    /**
     * The CtlAP
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CtlAP;
    /**
     * Constructor method for baseWebServiceReturn
     * @uses BaseWebServiceReturnTabela::setStatusServico()
     * @uses BaseWebServiceReturnTabela::setNrLocal()
     * @uses BaseWebServiceReturnTabela::setHoraLocal()
     * @uses BaseWebServiceReturnTabela::setHoraCentral()
     * @uses BaseWebServiceReturnTabela::setNrCentral()
     * @uses BaseWebServiceReturnTabela::setRetCode()
     * @uses BaseWebServiceReturnTabela::setTextoInformativo()
     * @uses BaseWebServiceReturnTabela::setSeuSistema()
     * @uses BaseWebServiceReturnTabela::setNrControleLocal()
     * @uses BaseWebServiceReturnTabela::setSessao()
     * @uses BaseWebServiceReturnTabela::setDesvioFluxo()
     * @uses BaseWebServiceReturnTabela::setCtlAP()
     * @param int $statusServico
     * @param int $nrLocal
     * @param string $horaLocal
     * @param string $horaCentral
     * @param int $nrCentral
     * @param string $retCode
     * @param string $textoInformativo
     * @param string $seuSistema
     * @param string $nrControleLocal
     * @param string $sessao
     * @param string $desvioFluxo
     * @param string $ctlAP
     */
    public function __construct($statusServico = null, $nrLocal = null, $horaLocal = null, $horaCentral = null, $nrCentral = null, $retCode = null, $textoInformativo = null, $seuSistema = null, $nrControleLocal = null, $sessao = null, $desvioFluxo = null, $ctlAP = null)
    {
        $this
            ->setStatusServico($statusServico)
            ->setNrLocal($nrLocal)
            ->setHoraLocal($horaLocal)
            ->setHoraCentral($horaCentral)
            ->setNrCentral($nrCentral)
            ->setRetCode($retCode)
            ->setTextoInformativo($textoInformativo)
            ->setSeuSistema($seuSistema)
            ->setNrControleLocal($nrControleLocal)
            ->setSessao($sessao)
            ->setDesvioFluxo($desvioFluxo)
            ->setCtlAP($ctlAP);
    }
    /**
     * Get StatusServico value
     * @return int
     */
    public function getStatusServico()
    {
        return $this->StatusServico;
    }
    /**
     * Set StatusServico value
     * @param int $statusServico
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
     */
    public function setStatusServico($statusServico = null)
    {
        // validation for constraint: int
        if (!is_null($statusServico) && !is_numeric($statusServico)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusServico)), __LINE__);
        }
        $this->StatusServico = $statusServico;
        return $this;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * Get RetCode value
     * @return string|null
     */
    public function getRetCode()
    {
        return $this->RetCode;
    }
    /**
     * Set RetCode value
     * @param string $retCode
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
     */
    public function setRetCode($retCode = null)
    {
        // validation for constraint: string
        if (!is_null($retCode) && !is_string($retCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retCode)), __LINE__);
        }
        $this->RetCode = $retCode;
        return $this;
    }
    /**
     * Get TextoInformativo value
     * @return string|null
     */
    public function getTextoInformativo()
    {
        return $this->TextoInformativo;
    }
    /**
     * Set TextoInformativo value
     * @param string $textoInformativo
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
     */
    public function setTextoInformativo($textoInformativo = null)
    {
        // validation for constraint: string
        if (!is_null($textoInformativo) && !is_string($textoInformativo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($textoInformativo)), __LINE__);
        }
        $this->TextoInformativo = $textoInformativo;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * Get NrControleLocal value
     * @return string|null
     */
    public function getNrControleLocal()
    {
        return $this->NrControleLocal;
    }
    /**
     * Set NrControleLocal value
     * @param string $nrControleLocal
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
     */
    public function setNrControleLocal($nrControleLocal = null)
    {
        // validation for constraint: string
        if (!is_null($nrControleLocal) && !is_string($nrControleLocal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nrControleLocal)), __LINE__);
        }
        $this->NrControleLocal = $nrControleLocal;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * Get DesvioFluxo value
     * @return string|null
     */
    public function getDesvioFluxo()
    {
        return $this->DesvioFluxo;
    }
    /**
     * Set DesvioFluxo value
     * @param string $desvioFluxo
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
     */
    public function setDesvioFluxo($desvioFluxo = null)
    {
        // validation for constraint: string
        if (!is_null($desvioFluxo) && !is_string($desvioFluxo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($desvioFluxo)), __LINE__);
        }
        $this->DesvioFluxo = $desvioFluxo;
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\BaseWebServiceReturnTabela
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
