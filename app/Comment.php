<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    // Relations
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
