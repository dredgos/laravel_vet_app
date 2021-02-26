<?php

namespace App\Http\Controllers;

use App\Models\Animal;
Use App\Models\Owner;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() 
    {
        $animalList = Animal::all();
        return view('animals', ["animals" => $animalList]);
    }

    public function show(Owner $owner, Animal $animal)
    {   
        return view("showAnimal", [
            "animal" => $animal
        ]);
    }
}
