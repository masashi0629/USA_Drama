<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acotor_Work extends Model
{
    protected $table = 'actors';

    public function works(){
        return $this->hasone('App\works','work_id');
    }
    public function actors(){
        return $this->hasone('App\actors','actor_id');
    }



}
