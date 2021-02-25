<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() 
    {
        $animalList = Animal::all();
        return view('animals', ["animals" => $animalList]);
    }
}
