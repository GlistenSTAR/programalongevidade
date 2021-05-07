<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Adesao ServiceType
 * @subpackage Services
 */
class Adesao extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AdesaoPrd
     * Meta informations extracted from the WSDL
     * - documentation: <iframe src='html/PDVAdesaoPrdV1_MethodDescription.htm' scrolling='auto' height='70%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd $parameters
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrdResponse|bool
     */
    public function AdesaoPrd(\App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdesaoPrd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\AdesaoPrdResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
