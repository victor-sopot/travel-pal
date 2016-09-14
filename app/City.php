<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
	public function rovers() {
		return $this->hasMany('App\Rover');
	}

	public function country() {
		return $this->belongsTo('App\Country');
	}

	public function getUrlAttribute()
	{
		return route('cities.show', ['id' => $this->id, 'slug' => $this->slug]);
	}

	public function getSlugAttribute()
	{
		return str_slug($this->name);
	}
}
