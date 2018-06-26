<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = 'detalles_productos';

    protected $fillable = ['descripcion'];

    public function publicacion(){
        return $this->belongsTo('App\publicacion');
    }

    public function caracteristica(){
       return $this->belongsTo('App\Caracteristica');
    }
}
