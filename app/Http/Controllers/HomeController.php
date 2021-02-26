<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        $message = $this->timeOfDay();
        return view('welcome', ["greeting" => $message]);
    }
    
    public function timeOfDay()
    {
        $time = date('H');
        if ($time < 12) {
            $message = "Good Morning";
        } elseif ($time <18) {
            $message = "Good Afternoon";
        } else {
            $message = "Good Evening";
        }

        return $message;
    }


}
