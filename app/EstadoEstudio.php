<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEstudio extends Model
{
    protected $table = "estado_estudios";
    protected $primaryKey = "id_estado";
    protected $fillable = ["id_estado","nombre"];

    //Relacion 1 a Muchos con la tabla estudios_superiores
    public function estudiosuperior(){

        return $this->hasMany('App\EstudioSuperior','id_estado','id_estado');

    }

}
