<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function Country()
    {
    	return $this->belongsTo('App\Country', 'countryID', 'tag');
    }
    public function Topic()
    {
    	return $this->belongsToMany('App\Topic','topic_post','resourceID','topicID');
    }
}
