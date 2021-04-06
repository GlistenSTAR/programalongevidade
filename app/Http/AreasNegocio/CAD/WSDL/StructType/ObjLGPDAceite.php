<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjLGPDAceite StructType
 * @subpackage Structs
 */
class ObjLGPDAceite extends AbstractStructBase
{
    /**
     * The DataAceite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataAceite;
    /**
     * The OrigemAceite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrigemAceite;
    /**
     * The VersaoTermo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VersaoTermo;
    /**
     * Constructor method for ObjLGPDAceite
     * @uses ObjLGPDAceite::setDataAceite()
     * @uses ObjLGPDAceite::setOrigemAceite()
     * @uses ObjLGPDAceite::setVersaoTermo()
     * @param string $dataAceite
     * @param string $origemAceite
     * @param string $versaoTermo
     */
    public function __construct($dataAceite = null, $origemAceite = null, $versaoTermo = null)
    {
        $this
            ->setDataAceite($dataAceite)
            ->setOrigemAceite($origemAceite)
            ->setVersaoTermo($versaoTermo);
    }
    /**
     * Get DataAceite value
     * @return string
     */
    public function getDataAceite()
    {
        return $this->DataAceite;
    }
    /**
     * Set DataAceite value
     * @param string $dataAceite
     * @return \StructType\ObjLGPDAceite
     */
    public function setDataAceite($dataAceite = null)
    {
        // validation for constraint: string
        if (!is_null($dataAceite) && !is_string($dataAceite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataAceite, true), gettype($dataAceite)), __LINE__);
        }
        $this->DataAceite = $dataAceite;
        return $this;
    }
    /**
     * Get OrigemAceite value
     * @return string|null
     */
    public function getOrigemAceite()
    {
        return $this->OrigemAceite;
    }
    /**
     * Set OrigemAceite value
     * @param string $origemAceite
     * @return \StructType\ObjLGPDAceite
     */
    public function setOrigemAceite($origemAceite = null)
    {
        // validation for constraint: string
        if (!is_null($origemAceite) && !is_string($origemAceite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origemAceite, true), gettype($origemAceite)), __LINE__);
        }
        $this->OrigemAceite = $origemAceite;
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
     * @return \StructType\ObjLGPDAceite
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
}
