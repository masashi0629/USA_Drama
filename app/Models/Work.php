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
        return $this->belongsTo('App\Models\BroadcastTime');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');

    }

    public function actors(){
        return $this->belongsToMany("App\Models\Actor","actor_work", "work_id", "actor_id");
    }

    public function usa_broadcasters(){
        return $this->belongsToMany('App\Models\UsaBroadcaster');
    }

    public function vactors(){
        return $this->belongsToMany('App\Models\Vactor',"vactor_work", "work_id", "vactor_id");
    }
}
