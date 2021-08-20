<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacant;

class VacantCreate extends Component
{
    public $name, $description, $salary, $linked_in, $address, $date;

    public function cleanFields(){
        $this->name = "";
        $this->description = "";
        $this->salary = "";
        $this->linked_in = "";
        $this->address = "";
        $this->date = "";
    }
    public function addVacant(){
        $this->validate([
            "name" => "required|string|min:5",
            "description" => "required|string|min:5",
            "salary" => "required|numeric",
            "linked_in" => "nullable|string",
            "address" => "nullable|string",
            "date" => "required|date"
        ]);
        $vacant = new Vacant;

        $vacant->name = $this->name;
        $vacant->description = $this->description;
        $vacant->salary = $this->salary;
        $vacant->linked_in = $this->linked_in;
        $vacant->address = $this->address;
        $vacant->date = $this->date;

        $vacant->save();

        $this->emit("vacantAdded", $vacant->id);

        $this->cleanFields();
    }
    public function render()
    {
        return view('livewire.vacant-create');
    }
}
