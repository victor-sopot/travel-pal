<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rover extends Model
{
    //
    public function user() {
    	return $this->hasOne('App\User');
    }

    public function booking() {
    	return $this->belongsTo('App\Booking');
    }

    public function country() {
    	return $this->belongsTo('App\Country');
    }

    public function city() {
    	return $this->belongsTo('App\City');
    }

}
