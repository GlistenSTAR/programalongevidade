<?php
namespace App\Mail;

use App\Http\Requests\ServiceLogsRequest;
use App\Http\Requests\UserManagementRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CadastroAtualizacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $serviceLogsRequest;
    private $userManagementRequest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ServiceLogsRequest $poServiceLogsRequest, UserManagementRequest $poUserManagementRequest)
    {
        $this->serviceLogsRequest = $poServiceLogsRequest;
        $this->userManagementRequest = $poUserManagementRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("####Montando template do email de atualização de cadastro -> ".json_encode($this->serviceLogsRequest->getRequisicao()). "--------" . json_encode($this->userManagementRequest->getPaciente()). "--------" . json_encode($this->userManagementRequest->getMedico()));
        return $this->view('mail.atualizacao_cadastro')->subject("Prontinho. Acabamos de atualizar o seu cadastro")->with(['requisicao' => $this->serviceLogsRequest->getRequisicao(), 'paciente' => $this->userManagementRequest->getPaciente()]);
    }
}
