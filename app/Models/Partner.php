<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function city()
    {
        return $this->hasOne('App\City');
    }
}
