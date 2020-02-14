<?php

use App\City;
use App\Http\Controllers\CitiesController;
use Illuminate\Http\Request;

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


//II/1
Route::post('cities','CitiesController@create');

//II/2
Route::post('delivery-times','DeliveriesController@create');


//II/3
Route::post('cities/{city_id}/{delivery_time}','CitiesController@attachDeliveryTimeToCity');


