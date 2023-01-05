<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    protected $table = 'work';

    protected $fillable = [
        'actors',
        'broadcast_times',
        'usa_broadcasters',
        'genres',
        'voice_actors',
        'work_actor',
        'work_voice_actor',
        'works'
    ];
}
