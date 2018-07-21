<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    public function resources()
    {
    	return $this->hasMany('App\Resources', 'countryID', 'resourceID');
    }
}
