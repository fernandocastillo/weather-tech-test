<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Resources\CityResource;

class ForecastController extends Controller
{
    //

    public function index($city_name=''){
        if($city = City::with('forecasts')->where('name','like',"%{$city_name}%")->first()){
            return new CityResource($city);
        }else{
            return response()->json(['message'=>'City not found'],404);
        }
    }
}
