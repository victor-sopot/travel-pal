<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    //
    public function cities() {
    	return $this->hasMany('App\City');
    }

    public function rovers() {
    	return $this->hasMany('App\Rover');
    }

    public function users() {
    	return $this->hasMany('App\User');
    }
}
