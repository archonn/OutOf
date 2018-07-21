<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function country()
    {
    	return $this->belongsTo('App\Country', 'tag', 'countryID');
    }
    public function topic()
    {
    	return $this->belongsToMany('App\Topic','topic_post','resourceID','topicID');
    }
}
