<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=[
        'name',
        'mentor_id'
    ];
    public function mentor(){
        return $this ->hasOne('App\User', 'mentor_id');
    }
}
