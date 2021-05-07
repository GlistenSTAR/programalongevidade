<?php
namespace App\Http\AreasNegocio\CAD\WSDL;
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapConsulta
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ConsultaCadastroPF2' => 'App\\Http\AreasNegocio\\CAD\\WSDL\\StructType\\ConsultaCadastroPF2',
            'ConsultaCadastroPF2Response' => 'App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\ConsultaCadastroPF2Response',
            'PDVConsultaCadastroPFV2ReturnData' => 'App\\Http\\AreasNegocio\CAD\WSDL\\StructType\\PDVConsultaCadastroPFV2ReturnData',
            'baseWebServiceReturnConsulta' => 'App\\Http\\AreasNegocio\\CAD\WSDL\\StructType\\BaseWebServiceReturnConsulta',
        );
    }
}
