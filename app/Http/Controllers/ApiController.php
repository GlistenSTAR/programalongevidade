<?php

namespace App\Http\Controllers;

use App\Http\AreasNegocio\CAN\ILocationCAN;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\Requests\BaseRequest;
use App\Http\Requests\LocationRequest;
use App\Http\Requests\ProdutoRequest;

class ApiController extends Controller
{

    private $locationCAN;
    private $produtoCAN;


    /**
     * ApiController constructor.
     */
    public function __construct(ILocationCAN $poLocationCAN, IProdutoCAN $poProdutoCAN)
    {
        $this->locationCAN = $poLocationCAN;
        $this->produtoCAN = $poProdutoCAN;

    }

    public function fetchCidadesByEstadoAction($idEstado) {

        $request = new BaseRequest();
        $request->setId($idEstado);
        $laCidades = [];

        $response = $this->locationCAN->fetchCidadesByEstado($request);

        if ($response->getisOperationSuccess()) {

            $laCidades = $response->getObjList();

        }


        return $laCidades;

    }

    public function fetchCidadesByFarmaciaEstadoAction($idEstado) {

        $request = new BaseRequest();
        $request->setId($idEstado);
        $laCidades = [];

        $response = $this->locationCAN->fetchCidadesFarmaciaByEstado($request);

        if ($response->getisOperationSuccess()) {

            $laCidades = $response->getObjList();

        }


        return $laCidades;

    }

    public function fetchBairrosByCidadeAction($cidade) {

        $request = new LocationRequest();
        $request->setCidade($cidade);
        $laBairros = [];

        $response = $this->locationCAN->fetchBairrosByCidade($request);

        if ($response->getisOperationSuccess()) {

            $laBairros = $response->getObjList();

        }

        return $laBairros;
    }

    public function fetchFarmaciasByBairroAction($cidade, $bairro) {

        $request = new LocationRequest();
        $request->setCidade($cidade);
        $request->setBairro($bairro);
        $laFarmacias = [];

        $response = $this->locationCAN->fetchFarmaciasByBairro($request);

        if ($response->getisOperationSuccess()) {

            $laFarmacias = $response->getObjList();

        }

        return $laFarmacias;
    }

    public function fetchProdutosByMarcaAction($psMarca) {

        $request = new ProdutoRequest();
        $request->setMarca($psMarca);
        $laProdutos = [];

        $response = $this->produtoCAN->fetchProdutosByMarca($request);

        if ($response->getisOperationSuccess()) {

            $laProdutos = $response->getObjList();

        }

        return $laProdutos;

    }

}
