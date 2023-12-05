<?php

namespace App\Http\Controllers;
require_once 'CountryData.php';
use Illuminate\Http\Request;
use countriesData\CountryData;




class DestinationsController extends Controller
{
    public function getTopDestinations(){
        $countryData = new CountryData();
        $topDestinations = $countryData::$topDestinations;
        return response()->json([
            "status"=> 200,
            "User"=> $topDestinations,
        ],200);

    }

    public function getOneDestination($country){
        $countryData = new CountryData();
        $allCountryData = $countryData::$allCountryData;
        return response()->json([
            "status"=> 200,
            "User"=> $allCountryData[$country],
        ],200);
    }


    // Route::get("destinations/top",[DestinationsController::class,'getTopDestinations']);
// Route::get("destinations/{country}",[DestinationsController::class,'getOneDestinations']);
// Route::post("destinations/save/{country}",[DestinationsController::class,'saveDestination']);
// Route::get("destinations/unsave/{id}",[DestinationsController::class,'unsaveDestination']);

    public function saveDestination($country){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
    public function unsaveDestination(){
        return response()->json([
            "status"=> 200,
            "User"=> "",
        ],200);
    }
}
