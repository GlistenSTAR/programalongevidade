<?php
namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogOnResponse StructType
 * @package LogOn
 * @subpackage Structs
 */
class LogOnResponseLogOn extends AbstractStructBase
{
    /**
     * The LogOnResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn
     */
    public $LogOnResult;
    /**
     * Constructor method for LogOnResponse
     * @uses LogOnResponseLogOn::setLogOnResult()
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn $logOnResult
     */
    public function __construct(PDVLogOnV1ReturnDataLogOn $logOnResult = null)
    {
        $this
            ->setLogOnResult($logOnResult);
    }
    /**
     * Get LogOnResult value
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn|null
     */
    public function getLogOnResult()
    {
        return $this->LogOnResult;
    }
    /**
     * Set LogOnResult value
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\PDVLogOnV1ReturnDataLogOn $logOnResult
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOnResponseLogOn
     */
    public function setLogOnResult(PDVLogOnV1ReturnDataLogOn $logOnResult = null)
    {
        $this->LogOnResult = $logOnResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\LogOnResponseLogOn
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
