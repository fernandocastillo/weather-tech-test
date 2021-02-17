<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'city'],function(){

    Route::get('/',[CityController::class,'index']);
    Route::post('/',[CityController::class,'create']);
    Route::get('/{city_id}/view',[CityController::class,'view']);
    Route::put('/{city_id}',[CityController::class,'update']);
    Route::delete('/{city_id}',[CityController::class,'delete']);

});
