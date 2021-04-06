<?php
namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\ListaAceite;
use App\Http\AreasNegocio\CAD\WSDL\StructType\ListaAceiteResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Lista ServiceType
 * @subpackage Services
 */
class Lista extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ListaAceite
     * Meta information extracted from the WSDL
     * - documentation: <iframe src='html/ListaAceiteConsumidor_MethodDescription.htm' scrolling='auto' height='150%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param ListaAceite $parameters
     * @return ListaAceiteResponse|bool
     */
    public function ListaAceite(ListaAceite $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListaAceite($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return ListaAceiteResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
