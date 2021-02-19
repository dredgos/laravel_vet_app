<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    
    public static function TimeOfDay()
    {
        $time = date('H');
        if ($time < 12) {
            return "Morning!";
        } elseif ($time <18) {
            return "Afternoon!";
        } else {
            return "Evening!";
        }
    }


}
