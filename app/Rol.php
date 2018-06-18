<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "roles";

    protected $fillable = ['rol'];

    //relaciones

    public function users(){
        return $this->hasMany('App\Users');
    }

}
