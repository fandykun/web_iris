<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    protected $table = 'events';

    public function galleries()
    {
        return $this->hasMany('App\Gallery', 'event_id', 'id');
    }
}
