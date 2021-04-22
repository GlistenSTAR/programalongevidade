<?php
namespace App\Http\AreasNegocio\CAD\WSDL\ServiceType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\SolicitaExclusao;
use App\Http\AreasNegocio\CAD\WSDL\StructType\SolicitaExclusaoResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SolicitaExclusao ServiceType
 * @subpackage Services
 */
class Exclusao extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SolicitaExclusao
     * Meta information extracted from the WSDL
     * - documentation: <iframe src='html/SolicitaExclusaoConsumidorV1_MethodDescription.htm' scrolling='auto' height='150%' width='70%' frameborder='0'></iframe>
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param SolicitaExclusao $parameters
     * @return SolicitaExclusaoResponse|bool
     */
    public function SolicitaExclusao(\App\Http\AreasNegocio\CAD\WSDL\StructType\SolicitaExclusao $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SolicitaExclusao($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return SolicitaExclusaoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
