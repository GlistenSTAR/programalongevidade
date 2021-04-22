<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListaAceiteResponse StructType
 * @subpackage Structs
 */
class ListaAceiteResponse extends AbstractStructBase
{
    /**
     * The ListaAceiteResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ListaAceiteConsumidorReturnData
     */
    public $ListaAceiteResult;
    /**
     * Constructor method for ListaAceiteResponse
     * @uses ListaAceiteResponse::setListaAceiteResult()
     * @param \StructType\ListaAceiteConsumidorReturnData $listaAceiteResult
     */
    public function __construct(\StructType\ListaAceiteConsumidorReturnData $listaAceiteResult = null)
    {
        $this
            ->setListaAceiteResult($listaAceiteResult);
    }
    /**
     * Get ListaAceiteResult value
     * @return \StructType\ListaAceiteConsumidorReturnData|null
     */
    public function getListaAceiteResult()
    {
        return $this->ListaAceiteResult;
    }
    /**
     * Set ListaAceiteResult value
     * @param \StructType\ListaAceiteConsumidorReturnData $listaAceiteResult
     * @return \StructType\ListaAceiteResponse
     */
    public function setListaAceiteResult(\StructType\ListaAceiteConsumidorReturnData $listaAceiteResult = null)
    {
        $this->ListaAceiteResult = $listaAceiteResult;
        return $this;
    }
}
