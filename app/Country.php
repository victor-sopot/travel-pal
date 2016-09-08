<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function cities() {
    	return $this->hasMany('App\City');
    }

    public function rovers() {
    	return $this->hasMany('App\Rover');
    }
}
