<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = [
        'genre_name'
    ];

    public function works(){
        return $this->hasMany('App\Models\Work');
    }
}
