<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function comentarios() {

        return  $this->hasMany('App\Comentario');
    }
}
