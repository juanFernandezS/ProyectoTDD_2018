<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';

    protected $fillable = ['nombre'];

    public function articulo(){
        $this->belongsTo('App\Articulo');
    }

    public function detalleProducto(){
        $this->hasMany('App\DetalleProducto');
    }
}
