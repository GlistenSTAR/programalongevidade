<?php
namespace App\Http\Requests;

use App\Http\AreasNegocio\CAD\Models\Medico;
use App\Http\AreasNegocio\CAD\Models\Paciente;
use App\Http\AreasNegocio\CAD\Models\Produto;
use App\User;

class UserManagementRequest extends BaseRequest
{

    private $cpf;
    private $uf;
    private $crm;
    private $email;
    private $paciente;
    private $medico;
    private $user;
    private $userParams;
    private $produto;
    private $dtNascimento;

    /**
     * UserManagementRequest constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getCpf() : String
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf): void
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getCrm()
    {
        return $this->crm;
    }

    /**
     * @param mixed $crm
     */
    public function setCrm($crm): void
    {
        $this->crm = $crm;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * @param Paciente $paciente
     */
    public function setPaciente(Paciente $paciente): void
    {
        $this->paciente = $paciente;
    }

    /**
     * @return Medico
     */
    public function getMedico()
    {
        return $this->medico;
    }

    /**
     * @param Medico $medico
     */
    public function setMedico(Medico $medico): void
    {
        $this->medico = $medico;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUserParams()
    {
        return $this->userParams;
    }

    /**
     * @param mixed $userParams
     */
    public function setUserParams($userParams): void
    {
        $this->userParams = $userParams;
    }

    /**
     * @return Produto
     */
    public function getProduto() : Produto
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
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * @param mixed $dtNascimento
     */
    public function setDtNascimento($dtNascimento): void
    {
        $this->dtNascimento = $dtNascimento;
    }

}