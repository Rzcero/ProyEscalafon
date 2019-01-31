<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoZona extends Model
{
    protected $table = "tipo_zona";
    protected $primaryKey = "id_tipo_zona";
    protected $fillable = ["id_tipo_zona","denominacion"];

    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_tipo_zona','id_tipo_zona');

    }
}
