<?php
namespace App\Http\AreasNegocio\CAD\WSDL;
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapExclusao
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'SolicitaExclusao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\SolicitaExclusao',
            'SolicitaExclusaoResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\\\StructType\\SolicitaExclusaoResponse',
            'SolicitaExclusaoConsumidorV1ReturnData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\\\StructType\\SolicitaExclusaoConsumidorV1ReturnData',
            'BaseWebServiceReturnExclusao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnExclusao',
        );
    }
}
