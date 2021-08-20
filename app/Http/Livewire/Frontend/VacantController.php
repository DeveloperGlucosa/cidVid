<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Vacant;

class VacantController extends Component
{
    public $openVacants = false;

    public function render()
    {
        return view('livewire.frontend.vacant-controller', [
            "vacants" => Vacant::orderBy("date", "desc")->paginate(3)
        ]);
    }

    public function toggleVacants(){
        $this->openVacants = !$this->openVacants;
    }
}
