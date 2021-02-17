<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    //

    private function getValidatedData(Request $request){
        return Validator::make($request->all(), [
            'name'       => 'required|unique:cities|min:3',
            'state'          => 'required|min:3',
            'country'        =>  'required',
        ])->validate();

    }

    public function index(Request $request){
        return new CityResource(City::paginate(5));
    }

    public function create(Request $request){

        $validatedData = $this->getValidatedData($request);
        $city = City::create($validatedData);
        return new CityResource($city);
    }

    public function view($city_id){
        if($city = City::find($city_id)){
            return new CityResource($city);
        }else{
            return response()->json(['message'=>'City not found'],404);
        }
    }

    public function update($city_id, Request $request){
        $validatedData = $this->getValidatedData($request);

        if($city = City::find($city_id)){
            $city->update($validatedData);
            return new CityResource($city);
        }else{
            return response()->json(['message'=>'City not found'],404);
        }
    }

    public function delete($city_id){

        try{
            if($city = City::find($city_id)){
                $city->delete();
                return response()->json(['message'=>'City deleted successfully']);
            }else{
                return response()->json(['message'=>'City not found'],404);
            }
        }catch (\Illuminate\Database\QueryException $exception){
            return response()->json(['message'=>'This city has forecast related and can not be deleted'],400);
        }

    }

}
