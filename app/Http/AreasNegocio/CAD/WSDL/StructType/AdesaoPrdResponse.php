<?php
namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdesaoPrdResponse StructType
 * @subpackage Structs
 */
class AdesaoPrdResponse extends AbstractStructBase
{
    /**
     * The AdesaoPrdResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var PDVAdesaoPrdV1ReturnAdesaoData
     */
    public $AdesaoPrdResult;
    /**
     * Constructor method for AdesaoPrdResponse
     * @uses AdesaoPrdResponse::setAdesaoPrdResult()
     * @param PDVAdesaoPrdV1ReturnAdesaoData $adesaoPrdResult
     */
    public function __construct(PDVAdesaoPrdV1ReturnAdesaoData $adesaoPrdResult = null)
    {
        $this
            ->setAdesaoPrdResult($adesaoPrdResult);
    }
    /**
     * Get AdesaoPrdResult value
     * @return PDVAdesaoPrdV1ReturnAdesaoData|null
     */
    public function getAdesaoPrdResult()
    {
        return $this->AdesaoPrdResult;
    }
    /**
     * Set AdesaoPrdResult value
     * @param PDVAdesaoPrdV1ReturnAdesaoData $adesaoPrdResult
     * @return AdesaoPrdResponse
     */
    public function setAdesaoPrdResult(PDVAdesaoPrdV1ReturnAdesaoData $adesaoPrdResult = null)
    {
        $this->AdesaoPrdResult = $adesaoPrdResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return AdesaoPrdResponse
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
