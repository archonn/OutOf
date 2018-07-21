<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function resources()
    {
    	return $this->belongsToMany('App\Resources','topic_post','topicID','resourceID');
    }
}
