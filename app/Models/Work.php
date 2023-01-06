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
}
