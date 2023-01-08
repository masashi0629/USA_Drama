<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice_Acotor_Work extends Model
{
    protected $table = 'works';
    protected $fillable = [
        'work_id',
        'voice_actor_id'
];
}
