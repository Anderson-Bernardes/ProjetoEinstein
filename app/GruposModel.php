<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GruposModel extends Model
{
    protected $table='grupos';
    protected $fillable=['id', 'nome', 'tema', 'foto', 'idUsuario'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
