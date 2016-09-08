<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rover extends Model
{
    //
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function booking() {
    	return $this->belongsTo('App\Booking');
    }
}
