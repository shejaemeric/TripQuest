<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\DestinationsController;

// create,getAll,getOne,getOneByEmail,update,delete

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("users",[UsersController::class,'getAll']);
Route::get("users/{id}",[UsersController::class,'getOne']);
Route::get("users/email/{email}",[UsersController::class,'getOneByEmail']);
Route::post("users",[UsersController::class,'create']);
Route::put("users/{id}",[UsersController::class,'update']);
Route::delete("users/{id}",[UsersController::class,'delete']);

//flights

Route::get("flights/",[FlightsController::class,'searchFlights']);
Route::post("flights/save",[FlightsController::class,'saveFlights']);
Route::delete("flights/unsave",[FlightsController::class,'unsaveFlights']);
Route::get("flights/save/{id}",[FlightsController::class,'getSavedFlights']);

//destinations

Route::get("destinations/top",[DestinationsController::class,'getTopDestinations']);
Route::get("destinations/{country}",[DestinationsController::class,'getOneDestination']);
Route::post("destinations/save/{country}",[DestinationsController::class,'saveDestination']);
Route::get("destinations/unsave/{id}",[DestinationsController::class,'unsaveDestination']);

