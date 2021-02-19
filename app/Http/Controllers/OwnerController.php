<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\OwnerRequest;
 


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

    public function create()
    {
        return view('form');
    }

    public function createPost(OwnerRequest $request)
    {
        // accept the data
        $data = $request->all();

        // create from the data
        $owner = Owner::create($data);

        // redirect
        return redirect("/owners/{$owner->id}");
    }
}
