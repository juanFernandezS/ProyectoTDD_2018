<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $fillable = ['fecha'];

    public function chats(){
        return $this->hasMany('App\Chat','id');
    }

    //probar cambion en el modelo de la bd
    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function publicacion(){
        return $this->belongsTo('App\Publicacion','id_publicacion');
    }
}
