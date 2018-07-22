<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function Resources()
    {
    	return $this->belongsToMany('App\Resources','topic_post','topicID','resourceID');
    }
    public function User()
    {
    	return $this->hasMany('App\User', 'prefTopic', 'topicID');
    }
}
