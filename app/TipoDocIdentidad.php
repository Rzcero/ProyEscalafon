<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocIdentidad extends Model
{
    protected $table = "tipo_doc_identidad";
    protected $primaryKey = "id_tipo_doc";
    protected $fillable = ["id_tipo_doc","abreviatura","denominacion"];
    
    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_tipo_doc','id_tipo_doc');

    }

    //Relacion 1 a Muchos con la tabla habiente
    public function habiente(){

        return $this->hasMany('App\Habiente','id_tipo_doc','id_tipo_doc');

    }

}
