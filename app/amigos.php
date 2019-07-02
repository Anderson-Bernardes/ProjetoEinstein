<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amigos extends Model
{
    protected $table='amigos';

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
