<?php
namespace App\Mail;

use App\Http\Requests\ServiceLogsRequest;
use App\Http\Requests\UserManagementRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CadastroAdesaoMail extends Mailable
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
        Log::info("####Montando template do email de cadastro e adesao -> ".json_encode($this->serviceLogsRequest->getRequisicao()). "--------" . json_encode($this->userManagementRequest->getPaciente()). "--------" . json_encode($this->userManagementRequest->getMedico()));
        return $this->view('mail.cadastro_adesao')->subject("Chegamos. Vamos até a farmácia?")->with(['requisicao' => $this->serviceLogsRequest->getRequisicao(), 'paciente' => $this->userManagementRequest->getPaciente(), 'medico' => $this->userManagementRequest->getMedico(), 'produto' => $this->userManagementRequest->getProduto()]);
    }
}
