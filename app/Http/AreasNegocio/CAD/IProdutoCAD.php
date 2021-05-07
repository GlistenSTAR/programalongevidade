<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\AreasNegocio\CAD\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use App\Http\Responses\CommonListResponse;
use App\Http\Responses\CommonObjectResponse;

interface IProdutoCAD
{

    /**
     * Fetch all Produtos
     * @return CommonListResponse
     */
    function fetchAllProdutos();

    /**
     * Fetch all Produtos
     * @param ProdutoRequest $request
     * @return CommonListResponse
     */
    function fetchAllProdutosInvalidos(ProdutoRequest $request);

    /**
     * Fetch Produtos By Marca
     * @param ProdutoRequest $request
     * @return CommonListResponse
     */
    function fetchProdutosByMarca(ProdutoRequest $request);

    /**
     * Fetch Produto By EAN
     * @param ProdutoRequest $request
     * @return CommonObjectResponse
     */
    function fetchProdutosByEAN(ProdutoRequest $request);

    /**
     * Fetch Produto By Id
     * @param ProdutoRequest $request
     * @return CommonObjectResponse
     */
    function fetchProdutoById(ProdutoRequest $request);

    /**
     * Insert Produto
     * @param ProdutoRequest $request
     * @return CommonObjectResponse
     */
    function insertProduto(ProdutoRequest $request);

    /**
     * Update Produto
     * @param ProdutoRequest $request
     * @return CommonObjectResponse
     */
    function updateProduto(ProdutoRequest $request);

}