<?php
namespace App\Http\AreasNegocio\CAD\WSDL;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapCadastroPF
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'CadastroPF2' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\CadastroPF2',
            'CadastroPF2Response' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\CadastroPF2Response',
            'PDVCadastroPFV2ReturnCadastroPFData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\PDVCadastroPFV2ReturnCadastroPFData',
            'baseWebServiceReturn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnCadastroPF',
        );
    }
}
