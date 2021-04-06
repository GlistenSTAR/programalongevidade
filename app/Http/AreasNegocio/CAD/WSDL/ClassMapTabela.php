<?php

namespace App\Http\AreasNegocio\CAD\WSDL;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapTabela
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Tabela' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\Tabela',
            'TabelaResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\TabelaResponse',
            'PDVTabelaV1ReturnTabelaData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\PDVTabelaV1ReturnTabelaData',
            'baseWebServiceReturn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnTabela',
        );
    }
}
