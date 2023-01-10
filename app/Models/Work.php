<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    protected $table = 'works';

    protected $fillable = [
        'work_name',
        'genre_id',
        'usa_broadcaster_id',
        'broadcast_time_id',
    ];
    public function broadcast_time(){
        return $this->belongsTo('App\Models\Broadcast_Time');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');

    }

    public function actors(){
        return $this->belongsToMany('App\Models\Actor');
    }

    public function usa_broadcasters(){
        return $this->belongsToMany('App\Models\USA_BroadCaster');
    }

    public function voice_actors(){
        return $this->belongsToMany('App\Models\Voice_Actor');
    }
}
