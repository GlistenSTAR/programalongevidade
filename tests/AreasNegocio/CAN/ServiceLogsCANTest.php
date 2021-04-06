<?php
namespace Tests\AreasNegocio\CAN;

use App\Http\AreasNegocio\CAD\Models\FaleConosco;
use App\Http\AreasNegocio\CAD\ServiceLogsCAD;
use App\Http\Requests\ServiceLogsRequest;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ServiceLogsCANTest extends TestCase
{

    use DatabaseTransactions;

    private $serviceLogsCAD;
    const FALE_CONOSCO_NOME = 'Teste nome';
    const FALE_CONOSCO_EMAIL = 'teste@teste.com';
    const FALE_CONOSCO_COMENTARIO = 'Este é um comentário de teste';
    const FALE_CONOSCO_UF = 'MG';
    const FALE_CONOSCO_CIDADE = 'Uberaba';
    const FALE_CONOSCO_MOTIVO = 'Motivo de teste';
    const FALE_CONOSCO_PRODUTO = 'Produto de teste';

    public function setUp() {

        parent::setUp();

        $this->serviceLogsCAD = $this->app->make(ServiceLogsCAD::class);
    }

    public function testInsertFaleConoscoLog()
    {

        $loFaleConosco = new FaleConosco();

        $loFaleConosco->LGV_FALE_CONOSCO_ID_PACIENTE = '';
        $loFaleConosco->LGV_FALE_CONOSCO_NOME = self::FALE_CONOSCO_NOME;
        $loFaleConosco->LGV_FALE_CONOSCO_EMAIL = self::FALE_CONOSCO_EMAIL;
        $loFaleConosco->LGV_FALE_CONOSCO_COMENTARIO = self::FALE_CONOSCO_COMENTARIO;
        $loFaleConosco->LGV_FALE_CONOSCO_DATA = Carbon::now();
        $loFaleConosco->LGV_FALE_CONOSCO_UF = self::FALE_CONOSCO_UF;
        $loFaleConosco->LGV_FALE_CONOSCO_CIDADE = self::FALE_CONOSCO_CIDADE;
        $loFaleConosco->LGV_FALE_CONOSCO_MOTIVO = self::FALE_CONOSCO_MOTIVO;
        $loFaleConosco->LGV_FALE_CONOSCO_PRODUTO = self::FALE_CONOSCO_PRODUTO;

        $loRequest = new ServiceLogsRequest();
        $loRequest->setFaleConosco($loFaleConosco);

        $loResponse = $this->serviceLogsCAD->insertFaleConoscoLog($loRequest);

        $this->assertTrue($loResponse->getisOperationSuccess());

        $loRequest->setId($loResponse->getObject()->LGV_FALE_CONOSCO_ID);

        $loResponse = $this->serviceLogsCAD->fetchFaleConoscoById($loRequest);

        $this->assertTrue($loResponse->getisOperationSuccess());

        $this->assertNotEmpty($loResponse->getObject()->LGV_FALE_CONOSCO_ID);

    }

}
