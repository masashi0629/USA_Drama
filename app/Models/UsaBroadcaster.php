<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsaBroadcaster extends Model
{
    protected $table = 'usa_broadcasters';
    protected $fillable = [
        'broadcaster_name'
    ];

    public function works(){
        return $this->hasMany('App\Models\Work');
    }
}
