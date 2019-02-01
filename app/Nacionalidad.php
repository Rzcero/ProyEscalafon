<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table = "nacionalidad";
    protected $primaryKey = "id_nacionalidad";
    protected $fillable = ["id_nacionalidad","denominacion"];

    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_nacionalidad','id_nacionalidad');

    }

}
