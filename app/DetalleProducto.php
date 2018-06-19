<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = 'detalles_productos';

    protected $fillable = ['descripcion'];

    public function publicacion(){
        $this->belongsTo('App\publicacion');
    }

    public function caracteristica(){
        $this->belongsTo('App\Caracteristica');
    }
}
