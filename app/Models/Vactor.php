<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vactor extends Model
{
    protected $table = 'vactors';
    protected $fillable = [
        'voice_actor_name'
    ];

    public function works(){
        return $this->belongsToMany("App\Models\Work","vactor_work","vactor_id","work_id");
    }
}
