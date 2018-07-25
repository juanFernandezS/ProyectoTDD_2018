<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';

    protected $fillable = ['mensaje','id_compra','origen'];

    public function compra(){
        return $this->belongsTo('App\Compra','id_compra');
    }
}
