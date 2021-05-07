<?php
namespace App\Http\Requests;


class LocationRequest extends BaseRequest
{

    private $cidade;
    private $bairro;

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
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }

}