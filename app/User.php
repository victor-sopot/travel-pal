<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'country_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bookings() {
        return $this->belongsToMany('App\Booking', 'users_bookings', 'user_id', 'booking_id');
    }

    public function rover() {
        return $this->belongsTo('App\Rover');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function getIsRoverAttribute()
    {
        return $this->rover != null;
    }
}
