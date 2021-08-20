<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendVacant;

class VacantSubmit extends Component
{
    use WithFileUploads;

    public $nombre, $telefono, $email, $linkedin_url, $cv_file;

    public function render()
    {
        return view('livewire.frontend.vacant-submit');
    }
    public function cleanFields(){
        $this->nombre = ""; 
        $this->telefono = ""; 
        $this->email = ""; 
        $this->linkedin_url = ""; 
        $this->cv_file = "";
    }
    public function submitVacant(){
        $this->validate([
            "nombre" => "required|string|min:3",
            "telefono" => "required|string|min:10|max:10",
            "email" => "required|email",
            "linkedin_url" => "nullable|url",
            "cv_file" => "nullable|file|mimes:pdf|max:2500"
        ]);
        $data = [
            "nombre" => $this->nombre,
            "telefono" => $this->telefono,
            "email" => $this->email,
            "linkedin_url" => $this->linkedin_url,
            "cv_file" => $this->cv_file
        ];

        Mail::to('contacto@cidvid.com.mx')->bcc(['monitoreo@glucosacomunicacion.com', 'comunicacion@cidvid.com.mx'])->send(new sendVacant($data));

        $this->cleanFields();
        session()->flash("cv_success", "Sus datos han sido enviados, pronto nos pondremos en contácto.");
    }
}
