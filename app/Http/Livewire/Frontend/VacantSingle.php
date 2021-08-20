<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class VacantSingle extends Component
{
    public $vacant;
    public function mount($vacant){
        $this->vacant = $vacant;
    }
    public function render()
    {
        return view('livewire.frontend.vacant-single');
    }
}
