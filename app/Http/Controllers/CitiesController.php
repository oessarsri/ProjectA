<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{

    //II-1
    public function Create(Request $request){
        $name =$request->input('name');
        $city = new City;
        $city->name = $name;

        $city->save();
        return $city;
    }

    //II-3
    public function attachDeliveryTimeToCity(Request $request){

        $city_id = $request->route()->parameters()["city_id"];
        $delivery_time = $request->route()->parameters()["delivery_time"];

        $city = City::find($city_id);
        $city->id_delivery_time = $delivery_time;
        $city->save();
    }


    //
}
