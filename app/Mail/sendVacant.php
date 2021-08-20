<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendVacant extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@cidvid.com.mx';
        $name = 'CidVID';
        $subject = 'Nuevo CV recibo desde sitio web';
        $view = $this->view('emails.vacant_submit');
        
        if($this->data["cv_file"] != null){
            return  $view->from($address, $name)->subject($subject)->attach(
                $this->data['cv_file']->getRealpath(), [
                'as' => $this->data['cv_file']->getClientOriginalName(),
                'mime' => $this->data['cv_file']->getClientMimeType(),
            ]);
        }else{
            return  $view->from($address, $name)->subject($subject);
        }
    }
}
