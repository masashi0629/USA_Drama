<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broadcast_Time extends Model
{
    protected $table = 'broadcast_times';
    protected $fillable = [
        'age_group'
    ];

    public function works(){
        return $this->hasMany('App\Models\Work');
    }
}
