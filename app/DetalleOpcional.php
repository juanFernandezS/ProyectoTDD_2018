<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleOpcional extends Model
{
    protected $table = 'detalles_opcionales';

    protected $fillable = ['nombre','descripcion'];

    public function publicacion(){
        return $this->belongsTo('App\Publicacion');
    }
}
