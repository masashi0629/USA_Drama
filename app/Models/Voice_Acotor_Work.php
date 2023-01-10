<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice_Acotor_Work extends Model
{
    protected $table = 'works';

    public function works(){
        return $this->hasone('App\works','work_id');
    }

    public function voice_actors(){
        return $this->hasone('App\voice_actors','voice_actor_id');
    }
}
