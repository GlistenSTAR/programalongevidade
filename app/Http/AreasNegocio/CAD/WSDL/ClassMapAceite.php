<?php
namespace App\Http\AreasNegocio\CAD\WSDL;
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapAceite
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AceiteTermo' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\AceiteTermo',
            'AceiteTermoResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\AceiteTermoResponse',
            'AceiteTermoLGPDV1ReturnData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\AceiteTermoLGPDV1ReturnData',
            'baseWebServiceReturnAceite' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnAceite',
        );
    }
}
