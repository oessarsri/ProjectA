<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function deliverytimes()
    {
        return $this->hasMany('App\Delivery');
    }
}
