<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];
    protected $table = 'galleries';

    public function events()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
}
