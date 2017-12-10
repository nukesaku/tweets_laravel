<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function hashTags() {
        return $this->belongsToMany('App\HashTag');
    }
}
