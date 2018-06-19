<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "articulos";

    protected $fillable = ['nombre'];

    //relaciones

    public function categoria(){
        $this->belongsTo('App\Categoria');
    }

    public function caracteristicas(){
        $this->hasMany('App\Caracteristica');
    }
}
