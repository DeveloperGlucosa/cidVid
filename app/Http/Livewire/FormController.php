<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendContact;

class FormController extends Component
{
    public $nombre_form, $empresa, $telefono_form, $email_form, $mensaje;
    public function render()
    {
        return view('livewire.form-controller');
    }
    public function cleanFields(){
        $this->nombre_form ="";
        $this->empresa = ""; 
        $this->telefono_form = "";
        $this->email_form = "";
        $this->mensaje = "";
    }
    public function sendForm(){
        $this->validate([
            "nombre_form" => "required|string|min:3",
            "telefono_form" => "required|string|min:10|max:10",
            "email_form" => "required|email",
            "empresa" => "nullable|string|min:3",
            "mensaje" => "nullable|string|max:500"
        ]);
        $data = [
            "nombre" => $this->nombre_form,
            "empresa" => $this->empresa,
            "telefono" => $this->telefono_form,
            "email" => $this->email_form,
            "mensaje" => $this->mensaje
        ];
        Mail::to('contacto@cidvid.com.mx')->bcc(['monitoreo@glucosacomunicacion.com', 'comunicacion@cidvid.com.mx'])->send(new sendContact($data));

        $this->cleanFields();
        session()->flash("success", "Mensaje enviado, pronto nos pondremos en contacto.");
    }
}
