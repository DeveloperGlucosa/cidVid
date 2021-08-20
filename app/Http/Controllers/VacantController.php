<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacant;

class VacantController extends Controller
{
    public function index(){
        $vacants = Vacant::paginate(15);
        return view('dashboard', \compact('vacants'));
    }
    public function store(Request $request){
        $request->validate([
            "name" => "required|string|min:5",
            "description" => "required|string|min:5",
            "salary" => "required|numeric",
            "linked_in" => "nullable|string",
            "address" => "nullable|string",
            "date" => "required|date"
        ]);

        $vacant = new Vacant;
        $vacant->name = $request->name;
        $vacant->description = $request->description;
        $vacant->salary = $request->salary;
        $vacant->linked_in = $request->linked_in;
        $vacant->address = $request->address;
        $vacant->date = $request->date;

        $vacant->save();

        return redirect()->back()->with("success", "La vacante ha sido publicada.");
    }
    public function getVacant(Request $request){
        return $request;
    }
    public function update(Request $reques, $id){
        return $request;
    }
}
