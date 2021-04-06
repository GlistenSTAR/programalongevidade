<?php
namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\AceiteTermo;
use App\Http\AreasNegocio\CAD\WSDL\StructType\AceiteTermoResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Aceite ServiceType
 * @subpackage Services
 */
class Aceite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AceiteTermo
     * Meta information extracted from the WSDL
     * - documentation: <iframe src='html/AceiteTermoLGPDV1_MethodDescription.htm' scrolling='auto' height='150%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param AceiteTermo $parameters
     * @return AceiteTermoResponse|bool
     */
    public function AceiteTermo(AceiteTermo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AceiteTermo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return AceiteTermoResponse
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
