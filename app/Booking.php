<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // each booking is done by 1 user
    public function user() {
    	return $this->hasOne('User');
    }

    public function rover() {
    	return $this->hasOne('Rover');
    }
}
