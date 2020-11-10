<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'

    ];
    protected function users(){
        return $this -> hasMay ('App\User');
    }
}
