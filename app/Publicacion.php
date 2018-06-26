<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";

    protected $fillable = [
        'titulo', 'comentario', 'estado', 'imagen', 'precio', 'cantidad', 'fecha_publicacion', 'id_usuario', 'id_articulo'
    ];

    //relaciones

    public function user(){
        return $this->belongsTo('App\User','id_usuario');
    }

    public function detallesOpcionales(){
       return $this->hasMany('App\DetalleOpcional');
    }

    public function detallesProducto(){
       return $this->hasMany('App\DetalleProducto');
    }
}
