<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2;
use App\Http\AreasNegocio\CAD\WSDL\StructType\CadastroPF2Response;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cadastro ServiceType
 * @subpackage Services
 */
class Cadastro extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CadastroPF2
     * Meta informations extracted from the WSDL
     * - documentation: <iframe src='html/PDVCadastroPFV2_MethodDescription.htm' scrolling='auto' height='70%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param CadastroPF2 $parameters
     * @return CadastroPF2Response|bool
     */
    public function CadastroPF2(CadastroPF2 $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CadastroPF2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return CadastroPF2Response
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
