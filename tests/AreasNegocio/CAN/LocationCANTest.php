<?php
namespace Tests\AreasNegocio\CAN;

use App\Http\AreasNegocio\CAD\LocationCAD;
use App\Http\Requests\BaseRequest;
use Tests\TestCase;

class LocationCANTest extends TestCase
{

    private $locationCAD;


    public function setUp() {

        parent::setUp();

        $this->locationCAD = $this->app->make(LocationCAD::class);
    }

    public function testFetchAllEstados()
    {

        $loReponse = $this->locationCAD->fetchAllEstados();

        $this->assertTrue($loReponse->getisOperationSuccess());

        $this->assertEquals(sizeof($loReponse->getObjList()), 27);

    }

    public function testFetchCidadesByEstado()
    {

        $loRequest = new BaseRequest();
        $loRequest->setId(1);

        $loReponse = $this->locationCAD->fetchCidadesByEstado($loRequest);

        $this->assertTrue($loReponse->getisOperationSuccess());

        $this->assertEquals(sizeof($loReponse->getObjList()), 22);

    }
}
