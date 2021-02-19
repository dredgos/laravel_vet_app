<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
 


class OwnerController extends Controller
{
    public function index() 
    {
        $ownerList = Owner::all();
        return view('owners', ["owners" => $ownerList]);
    }


    public function show(Owner $owner)
    {   
        return view("show", [
            "owner" => $owner
        ]);
    }
}
