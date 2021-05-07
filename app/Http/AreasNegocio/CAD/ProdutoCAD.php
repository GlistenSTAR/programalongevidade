<?php
namespace App\Http\AreasNegocio\CAD;

use App\Http\AreasNegocio\CAD\Models\Category;
use App\Http\AreasNegocio\CAD\Models\Produto;
use App\Http\Requests\BaseRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProdutoRequest;
use App\Http\Responses\CommonListResponse;
use App\Http\Responses\CommonObjectResponse;
use Illuminate\Support\Facades\Log;

class ProdutoCAD implements IProdutoCAD
{
    /**
     * @inheritDoc
     */
    function fetchAllProdutos()
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Produto::distinct()->where([['LGV_STATUS', '=', '1'],])->get(['LGV_PRODUTO_MARCA']));
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####ProdutoCAD->fetchAllProdutos - ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchAllProdutosInvalidos(ProdutoRequest $request)
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Produto::whereNotIn('LGV_PRODUTO_EAN', $request->getProdutosAtivos())->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####ProdutoCAD->fetchAllProdutos - ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchProdutosByMarca(ProdutoRequest $request)
    {
        $loResponse = new CommonListResponse();

        try {

            $loResponse->setObjList(Produto::where([['LGV_PRODUTO_MARCA', '=' ,$request->getMarca()], ['LGV_STATUS', '=', '1']])->orderBy('LGV_PRODUTO_DESCRICAO', 'DESC')->get());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####ProdutoCAD->fetchProdutosByMarca - ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchProdutosByEAN(ProdutoRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Produto::distinct()->where([['LGV_PRODUTO_EAN', '=' ,$request->getEan()],['LGV_STATUS', '=', '1'],])->get(['LGV_PRODUTO_DESCRICAO'])->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####ProdutoCAD->fetchProdutosByEAN - ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function fetchProdutoById(ProdutoRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $loResponse->setObject(Produto::where([['LGV_PRODUTO_ID', '=' ,$request->getId()],['LGV_STATUS', '=', '1'],])->get()->first());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");


        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("####ProdutoCAD->fetchProdutosById - ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function insertProduto(ProdutoRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getProduto()->save();
            $loResponse->setObject($request->getProduto());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ProdutoCAD->insertProduto ---- ".$e->getMessage());
        }

        return $loResponse;
    }

    /**
     * @inheritDoc
     */
    function updateProduto(ProdutoRequest $request)
    {
        $loResponse = new CommonObjectResponse();

        try {

            $request->getProduto()->update();
            $loResponse->setObject($request->getProduto());
            $loResponse->setIsOperationSuccess(true);
            $loResponse->setMessages("");

        } catch (\Exception $e) {
            $loResponse->setIsOperationSuccess(false);
            $loResponse->setMessages($e->getMessage());
            Log::error("######ProdutoCAD->updateProduto ---- ".$e->getMessage());
        }

        return $loResponse;
    }

}