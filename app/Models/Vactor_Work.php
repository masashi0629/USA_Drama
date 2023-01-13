<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vactor_Work extends Model
{
    protected $table = 'vactor_work';

    protected $fillable = [
        'work_id',
        'vactor_id'
    ];
}
