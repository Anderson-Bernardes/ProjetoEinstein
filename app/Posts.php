<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['user_id', 'grupo_id', 'texto', 'imagem', 'created_at', 'created_at'];
}
