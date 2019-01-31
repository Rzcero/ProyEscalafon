<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVia extends Model
{
    protected $table = "tipo_via";
    protected $primaryKey = "id_tipo_via";
    protected $fillable = ["id_tipo_via","abreviatura","denominacion"];

    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_tipo_via','id_tipo_via');

    }

}
