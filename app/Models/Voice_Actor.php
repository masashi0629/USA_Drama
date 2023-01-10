<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice_Actor extends Model
{
    protected $table = 'voice_actors';
    protected $fillable = [
        'voice_actor_name'
    ];

    public function works(){
        return $this->hasMany('App\Models\Work');
    }
}
