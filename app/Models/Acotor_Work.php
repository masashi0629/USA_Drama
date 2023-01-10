<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acotor_Work extends Model
{
    protected $table = 'actor_work';

     protected $fillable = [
        'work_id',
        'actor_id'
    ];
}
