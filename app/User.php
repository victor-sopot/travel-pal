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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = 
    [
        'isRover'
    ];

    public function booking() {
        return $this->hasMany('App\Booking');
    }

    public function rover() {
        return $this->hasOne('App\Rover');
    }

    public function getIsRoverAttribute()
    {
        return $this->rover != null;
    }
}
