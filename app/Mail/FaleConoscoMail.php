<?php
namespace App\Mail;

use App\Http\Requests\ServiceLogsRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class FaleConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ServiceLogsRequest $poRequest)
    {
        $this->request = $poRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("####Montando template do email de fale conosco -> ".json_encode($this->request->getFaleConosco()));
        return $this->view('mail.fale_conosco')->subject("Recebido. Em breve entraremos em contato")->with('faleConosco', $this->request->getFaleConosco());
    }
}
