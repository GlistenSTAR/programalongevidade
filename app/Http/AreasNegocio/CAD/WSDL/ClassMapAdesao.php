<?php
namespace App\Http\AreasNegocio\CAD\WSDL;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMapAdesao
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AdesaoPrd' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\AdesaoPrd',
            'ArrayOfQuestao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\ArrayType\\ArrayOfQuestao',
            'Questao' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\Questao',
            'AdesaoPrdResponse' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\AdesaoPrdResponse',
            'PDVAdesaoPrdV1ReturnAdesaoData' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\PDVAdesaoPrdV1ReturnAdesaoData',
            'baseWebServiceReturn' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\BaseWebServiceReturnAdesao',
            'ArrayOfPrdAderido' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\ArrayType\\ArrayOfPrdAderido',
            'PrdAderido' => '\\App\\Http\\AreasNegocio\\CAD\\WSDL\\StructType\\PrdAderido',
        );
    }
}
