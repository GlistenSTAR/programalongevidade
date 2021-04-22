<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use StructType\BaseWebServiceReturn;

/**
 * This class stands for ListaAceiteConsumidorReturnData StructType
 * @subpackage Structs
 */
class ListaAceiteConsumidorReturnData extends BaseWebServiceReturn
{
    /**
     * The ListaAceite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfObjLGPDAceite
     */
    public $ListaAceite;
    /**
     * The ListaExclusao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfObjLGPDExclusao
     */
    public $ListaExclusao;
    /**
     * Constructor method for ListaAceiteConsumidorReturnData
     * @uses ListaAceiteConsumidorReturnData::setListaAceite()
     * @uses ListaAceiteConsumidorReturnData::setListaExclusao()
     * @param \ArrayType\ArrayOfObjLGPDAceite $listaAceite
     * @param \ArrayType\ArrayOfObjLGPDExclusao $listaExclusao
     */
    public function __construct(\ArrayType\ArrayOfObjLGPDAceite $listaAceite = null, \ArrayType\ArrayOfObjLGPDExclusao $listaExclusao = null)
    {
        $this
            ->setListaAceite($listaAceite)
            ->setListaExclusao($listaExclusao);
    }
    /**
     * Get ListaAceite value
     * @return \ArrayType\ArrayOfObjLGPDAceite|null
     */
    public function getListaAceite()
    {
        return $this->ListaAceite;
    }
    /**
     * Set ListaAceite value
     * @param \ArrayType\ArrayOfObjLGPDAceite $listaAceite
     * @return \StructType\ListaAceiteConsumidorReturnData
     */
    public function setListaAceite(\ArrayType\ArrayOfObjLGPDAceite $listaAceite = null)
    {
        $this->ListaAceite = $listaAceite;
        return $this;
    }
    /**
     * Get ListaExclusao value
     * @return \ArrayType\ArrayOfObjLGPDExclusao|null
     */
    public function getListaExclusao()
    {
        return $this->ListaExclusao;
    }
    /**
     * Set ListaExclusao value
     * @param \ArrayType\ArrayOfObjLGPDExclusao $listaExclusao
     * @return \StructType\ListaAceiteConsumidorReturnData
     */
    public function setListaExclusao(\ArrayType\ArrayOfObjLGPDExclusao $listaExclusao = null)
    {
        $this->ListaExclusao = $listaExclusao;
        return $this;
    }
}
