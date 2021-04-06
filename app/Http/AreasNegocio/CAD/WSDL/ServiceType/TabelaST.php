<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\Tabela;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tabela ServiceType
 * @subpackage Services
 */
class TabelaST extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Tabela
     * Meta informations extracted from the WSDL
     * - documentation: <iframe src='html/PDVTabelaV1_MethodDescription.htm' scrolling='auto' height='70%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \App\Http\AreasNegocio\CAD\WSDL\StructType\Tabela $parameters
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\TabelaResponse|bool
     */
    public function Tabela(Tabela $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Tabela($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \App\Http\AreasNegocio\CAD\WSDL\StructType\TabelaResponse
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
