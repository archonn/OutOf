<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'name', 'organization', 'email', 'why'
    ];

    public function User()
    {
    	return $this->hasMany('App\User', 'mentorID', 'id');
    }
}
