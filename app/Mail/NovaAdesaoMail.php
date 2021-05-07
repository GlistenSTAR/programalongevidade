<?php
namespace App\Mail;

use App\Http\Requests\ServiceLogsRequest;
use App\Http\Requests\UserManagementRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class NovaAdesaoMail extends Mailable
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
        Log::info("####Montando template do email de nova requisição de adesão -> ".json_encode($this->serviceLogsRequest->getRequisicao()). "--------". json_encode($this->userManagementRequest->getPaciente()) . "--------" . json_encode($this->userManagementRequest->getMedico()));
        return $this->view('mail.nova_adesao')->subject("Ótimo! Recebemos a sua requisição de benefícios")->with(['requisicao' => $this->serviceLogsRequest->getRequisicao(), 'medico' => $this->userManagementRequest->getMedico(), 'paciente' => $this->userManagementRequest->getPaciente(), 'produto' => $this->userManagementRequest->getProduto()]);
    }
}
