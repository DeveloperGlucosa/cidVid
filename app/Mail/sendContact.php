<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'no-reply@cidvid.com.mx';
        $name = 'CidVID';
        $subject = 'Ha recivido un nuevo mensaje desde el sitio web';
        $view = $this->view('emails.contact_submit');
        
        return  $view->from($address, $name)->subject($subject);
    }
}
