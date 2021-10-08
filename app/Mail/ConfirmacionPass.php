<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmacionPass extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Envio de password';
    public $enviarCorrreo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($enviarCorrreo)
    {
        $this->enviarCorrreo = $enviarCorrreo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mensaje-recivido');
    }
}
