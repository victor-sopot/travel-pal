<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // each booking is done by 1 user
    public function user() {
    	return $this->belongsToMany('App\User', 'users_bookings', 'user_id', 'booking_id');
    }

    public function rover() {
    	return $this->hasOne('App\Rover');
    }

    public function city() {
    	return $this->belongsTo('App\City');
    }
}