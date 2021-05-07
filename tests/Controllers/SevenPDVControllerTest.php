<?php
namespace Tests\Controllers;

use App\Http\Controllers\SevenPDVController;
use Tests\TestCase;


class SevenPDVControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp() {

        parent::setUp();

    }

    public function testConsultaCadastroAction()
    {

        $this->withoutMiddleware();

        $requestData = ['dtNascimento' => '19/12/1984', 'cpfCadastro' => '064.059.366-60'];

        $this->call('POST', '/api/consultaCadastro', $requestData);

    }
}
