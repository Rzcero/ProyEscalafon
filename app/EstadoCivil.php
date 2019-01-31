<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = "estado_civil";
    protected $primaryKey = "id_estado_civil";
    protected $fillable = ["id_estado_civil","denominacion"];

    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_estado_civil','id_estado_civil');

    }

}
