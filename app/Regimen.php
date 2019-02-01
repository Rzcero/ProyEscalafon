<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table = "regimen";
    protected $primaryKey = "id_regimen";
    protected $fillable = ["id_regimen",
    "descripcion"];

    //Relacion 1 a muchos con la tabla docente
    public function docente(){

        return $this->hasMany('App/Docente','id_regimen','id_regimen');

    }

    //  1 regimen puede estar contenido en muchos categoria_regimen
     public function categoria_regimen(){

        return $this->hasMany("App\CategoriaRegimen","id_regimen","id_regimen");

    }

     //  1 regimen puede estar contenido en muchos contratos
     public function contrato(){
        return $this->hasMany("App\Contrato","id_regimen","id_regimen");

    }
}
