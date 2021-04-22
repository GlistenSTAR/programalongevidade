<?php

namespace App\Http\AreasNegocio\CAD\WSDL;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapLogOn
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'LogOn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\LogOn',
            'LogOnResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\LogOnResponseLogOn',
            'PDVLogOnV1ReturnData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\PDVLogOnV1ReturnDataLogOn',
            'baseWebServiceReturn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnLogOn',
        );
    }
}
