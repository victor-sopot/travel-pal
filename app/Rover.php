<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rover extends Model
{
    //
    protected $fillable = ['country_id', 'city_id', 'bio', 'rating', 'tel'];

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

    public function getUrlAttribute() {
        return route('rovers.show', ['id' => $this->id, 'slug' => $this->slug]);
    }

    public function getSlugAttribute()
    {
        return str_slug($this->user->last_name);
    }

}
