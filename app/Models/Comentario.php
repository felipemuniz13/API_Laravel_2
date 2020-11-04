<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    public function articulos() {

        return $this->belongTo('App\Producto');
    }

    public function usuarios() {

        return $this->belongTo('App\Persona');
    }
}