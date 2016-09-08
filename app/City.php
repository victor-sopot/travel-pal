<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
	public function rover() {
		return $this->hasMany('App\Rover');
	}

	public function country() {
		return $this->hasOne('App\Country');
	}
}
