<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacant;
use Livewire\WithPagination;

class VacantController extends Component
{
    use WithPagination; 

    protected $listeners = [
        "vacantAdded"
    ];

    public function vacantAdded($vacantId){
        session()->flash("success", "La vacante ha sido publicada.");
    }
    public function render()
    {
        return view('livewire.vacant-controller', [
            "vacants" => Vacant::orderBy("id", "desc")->paginate(5)
        ]);
    }
    public function destroy($id){
        $vacant = Vacant::find($id);
        $vacant->delete();

        session()->flash("success", "La vacante ha sido eliminada.");
    }
}
