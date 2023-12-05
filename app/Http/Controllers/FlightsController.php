<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Route::get("flights/",[FlightsController::class,'searchFlights']);
// Route::post("flights/save",[FlightsController::class,'saveFlights']);
// Route::delete("flights/unsave",[FlightsController::class,'unsaveFlights']);
// Route::get("flights/save/{id}",[FlightsController::class,'getSavedFlights']);

class FlightsController extends Controller
{
    public function searchFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);

    }
    public function saveFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function unsaveFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function getSavedFlights(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
}
