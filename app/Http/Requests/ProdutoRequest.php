<?php
namespace App\Http\Requests;


use App\Http\AreasNegocio\CAD\Models\Produto;

class ProdutoRequest extends BaseRequest
{

    private $ean;
    private $marca;
    private $produto;
    private $produtosAtivos;

    /**
     * ProdutoRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param mixed $ean
     */
    public function setEan($ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return Produto
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param Produto $produto
     */
    public function setProduto(Produto $produto): void
    {
        $this->produto = $produto;
    }

    /**
     * @return mixed
     */
    public function getProdutosAtivos()
    {
        return $this->produtosAtivos;
    }

    /**
     * @param mixed $produtosAtivos
     */
    public function setProdutosAtivos($produtosAtivos): void
    {
        $this->produtosAtivos = $produtosAtivos;
    }

}