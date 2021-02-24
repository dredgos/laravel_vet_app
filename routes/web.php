<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "index"]);

/* Route for Owners */

Route::group(["prefix" => "owners"], function() {
    Route::group(["middleware" => "auth"], function (){
        Route::get("/create", [OwnerController::class, "create"]);
        Route::post("/create", [OwnerController::class, "createPost"]);
    });
    Route::get("/", [OwnerController::class, "index"]);
    Route::get("/{owner}", [OwnerController::class, "show"]);
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
