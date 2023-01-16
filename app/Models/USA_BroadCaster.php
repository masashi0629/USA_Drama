<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usa_Broadcaster extends Model
{
    protected $table = 'usa_broadcasters';
    protected $fillable = [
        'broadcaster_name'
    ];

    public function works(){
        return $this->hasMany('App\Models\Work');
    }
}
