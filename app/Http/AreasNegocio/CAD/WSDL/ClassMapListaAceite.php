<?php
namespace App\Http\AreasNegocio\CAD\WSDL;
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapListaAceite
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ListaAceite' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ListaAceite',
            'ListaAceiteResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ListaAceiteResponse',
            'ListaAceiteConsumidorReturnData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ListaAceiteConsumidorReturnData',
            'baseWebServiceReturn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturn',
            'ArrayOfObjLGPDAceite' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\ArrayType\\ArrayOfObjLGPDAceite',
            'ObjLGPDAceite' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ObjLGPDAceite',
            'ArrayOfObjLGPDExclusao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\ArrayType\\ArrayOfObjLGPDExclusao',
            'ObjLGPDExclusao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ObjLGPDExclusao',
        );
    }
}
