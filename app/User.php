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
        'name', 'email', 'password', 'country', 'status', '_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', '_token',
    ];

    public function Country()
    {
        return $this->belongsTo('App\Country', 'prefCountry', 'countryID');
    }
    public function Topic()
    {
        return $this->belongsTo('App\Topic', 'prefTopic', 'topicID');
    }
    public function Mentor()
    {
        return $this->belongsTo('App\Mentor', 'mentorID', 'id');
    }
    public function Requests()
    {
        return $this->hasMany('App\Requests');
    }
}
