<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    public function Resources()
    {
    	return $this->hasMany('App\Resources', 'tag', 'countryID');
    }
    public function User()
    {
    	return $this->hasMany('App\User', 'prefCountry', 'countryID');
    }
}
