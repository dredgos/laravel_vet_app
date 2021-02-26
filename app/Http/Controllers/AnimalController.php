<?php

namespace App\Http\Controllers;

use App\Models\Animal;
Use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;

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

    public function create()
    {
        return view('formAnimal');
    }

    public function store(Owner $owner, AnimalRequest $request)
    {   

        $data = $request->all();
        $animal = new Animal($data);
        $animal->owner()->associate($owner);
        $animal->save();

        // redirect
        return redirect("/owners/{$owner->id}/animals/{$animal->id}");
    }

}
