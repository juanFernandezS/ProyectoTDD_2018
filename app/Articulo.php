<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "articulos";

    protected $fillable = ['nombre','id_categoria'];

    //relaciones

    public function categoria(){
        return $this->belongsTo('App\Categoria','id_categoria');
    }

    public function caracteristicas(){
        return $this->hasMany('App\Caracteristica');
    }

    public function publicaciones(){
        return $this->hasMany('App\Publicacion','id');
    }
}
