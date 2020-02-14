<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;

class DeliveriesController extends Controller
{

//II/2
        public function Create(Request $request){
            $delivery_at =$request->input('delivery_at');
            $delivery= new Delivery();
            $delivery->delivery_at = $delivery_at;
            $delivery->save();
            return $delivery;
        }

}
