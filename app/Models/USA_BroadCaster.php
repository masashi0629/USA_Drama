<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class USA_BroadCaster extends Model
{
    protected $table = 'usa_broadcasters';
    protected $fillable = [
        'broadcaster_name'
    ];
}