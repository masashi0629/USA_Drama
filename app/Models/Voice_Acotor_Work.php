<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice_Acotor_Work extends Model
{
    protected $table = 'voice_actor_work';

    protected $fillable = [
        'work_id',
        'voice_actor_id'
    ];
}
