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

    // expose a method, that uses a NAMED route
    // to dynamically create a URL to this countries details
    public function getUrlAttribute()
    {
        return route('countries.show', ['id' => $this->id, 'slug' => $this->slug]);
    }

    public function getSlugAttribute()
    {
        return str_slug($this->name);
    }

    public function getImgAttribute()
    {
        return str_replace(' ', '-', strtolower($this->name));
    }

    public function getPlainUrlAttribute()
    {
        return 'http://localhost:8000/countries/';
    }
}
