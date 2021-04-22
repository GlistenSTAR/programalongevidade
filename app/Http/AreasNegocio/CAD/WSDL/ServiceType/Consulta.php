<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\ConsultaCadastroPF2;
use App\Http\AreasNegocio\CAD\WSDL\StructType\ConsultaCadastroPF2Response;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consulta ServiceType
 * @subpackage Services
 */
class Consulta extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ConsultaCadastroPF2
     * Meta informations extracted from the WSDL
     * - documentation: <iframe src='html/PDVConsultaCadastroPFV2_MethodDescription.htm' scrolling='auto' height='70%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param ConsultaCadastroPF2 $parameters
     * @return ConsultaCadastroPF2Response|bool
     */
    public function ConsultaCadastroPF2(ConsultaCadastroPF2 $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConsultaCadastroPF2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return ConsultaCadastroPF2Response
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
