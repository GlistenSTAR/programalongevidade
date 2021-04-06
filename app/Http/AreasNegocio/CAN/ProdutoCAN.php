<?php
namespace App\Http\AreasNegocio\CAN;

use App\Http\AreasNegocio\CAD\IProdutoCAD;
use App\Http\Requests\ProdutoRequest;
use App\Http\Responses\CommonListResponse;

class ProdutoCAN implements IProdutoCAN
{

    private $produtoCAD;

    /**
     * ProdutoCAN constructor.
     */
    public function __construct(IProdutoCAD $poProdutoCAD)
    {

        $this->produtoCAD = $poProdutoCAD;

    }


    /**
     * @inheritDoc
     */
    function fetchAllProdutos()
    {
        return $this->produtoCAD->fetchAllProdutos();
    }

    /**
     * @inheritDoc
     */
    function fetchAllProdutosInvalidos(ProdutoRequest $request)
    {
        return $this->produtoCAD->fetchAllProdutosInvalidos($request);
    }

    /**
     * @inheritDoc
     */
    function fetchProdutosByMarca(ProdutoRequest $request)
    {
        return $this->produtoCAD->fetchProdutosByMarca($request);
    }

    /**
     * @inheritDoc
     */
    function fetchProdutosByEAN(ProdutoRequest $request)
    {
        return $this->produtoCAD->fetchProdutosByEAN($request);
    }

    /**
     * @inheritDoc
     */
    function fetchProdutoById(ProdutoRequest $request)
    {
        return $this->produtoCAD->fetchProdutoById($request);
    }

    /**
     * @inheritDoc
     */
    function insertProduto(ProdutoRequest $request)
    {
        return $this->produtoCAD->insertProduto($request);
    }

    /**
     * @inheritDoc
     */
    function updateProduto(ProdutoRequest $request)
    {
        return $this->produtoCAD->updateProduto($request);
    }


}