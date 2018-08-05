<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = [
        'users_id', 'mentor_id', 'status'
    ];

    public function Mentor()
    {
    	return $this->belongsTo('App\Mentor');
    }

    public function User()
    {
    	return $this->belongsTo('App\User', 'users_id', 'id');
    }
}
