<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VacantSingle extends Component
{
    public $vacant;
    public function mount($vacant){
        $this->vacant = $vacant;
    }
    
    public function render()
    {
        return view('livewire.vacant-single');
    }
}
