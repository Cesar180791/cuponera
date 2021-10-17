<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationPost extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Confirmacion y detalle de compra';
    public $Venta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Venta)
    {
        $this->Venta = $Venta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmation-post'); 
    }
}
