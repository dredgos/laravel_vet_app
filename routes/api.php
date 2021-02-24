<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiOwnerController;
use App\Http\Controllers\API\Owners\AnimalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => "owners"], function() {
    Route::get("/", [ApiOwnerController::class, "index"]);
    Route::post("/", [ApiOwnerController::class, "createPost"]);


    Route::group(["prefix" => "{ownerid}"], function() {
        Route::delete("/", [ApiOwnerController::class, "destroy"]);
        Route::put("/", [ApiOwnerController::class, "update"]);
        Route::get("/", [ApiOwnerController::class, "show"]);
        
        
        Route::group(["prefix" => "animals"], function() {
            Route::get("/", [AnimalController::class, "index"]);
            Route::post("/", [AnimalController::class, "createPost"]);


            Route::group(["prefix" => "{animalid}"], function() {
                Route::get("/", [AnimalController::class, "show"]);
                Route::put("/", [AnimalController::class, "update"]);
                Route::delete("/", [AnimalController::class, "destroy"]);
            
            });
        });
    });
    
});

