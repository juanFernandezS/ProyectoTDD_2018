<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";

    protected $fillable = [
        'titulo', 'comentario', 'estado', 'imagen', 'pecio', 'cantidad', 'fecha_publicacion', 'id_usuario', 'id_articulo'
    ];

    //relaciones

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function articulo(){
        return $this->belongsTo('App\Articulo');
    }
}
