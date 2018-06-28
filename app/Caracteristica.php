<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';

    protected $fillable = ['nombre','id_articulo'];

    public function articulo(){
        return $this->belongsTo('App\Articulo','id_articulo');
    }

    public function detalleProducto(){
       return $this->hasMany('App\DetalleProducto');
    }
}
