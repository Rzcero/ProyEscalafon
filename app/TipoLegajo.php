<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLegajo extends Model
{
    protected $table = "tipo_legajo";
    protected $primaryKey = "id_tipo_legajo";
    protected $fillable = ["id_tipo_legajo","nombre"];

    //Relacion 1 a muchos con la tabla persona
    public function persona(){

        return $this->hasMany('App\Persona','id_tipo_legajo','id_tipo_legajo');

    }
}
