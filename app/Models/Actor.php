<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';
    protected $fillable = [
        'actor_name'
    ];
    public function works(){
        return $this->belongsToMany('App\Models\Work',"actor_work","actor_id","work_id");
    }
}
