<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = "modalidad";
    protected $primaryKey = "id_modalidad";
    protected $fillable = ["id_modalidad","nombre"];

    //Relacion 1 a Muchos con la tabla estudios_superiores
    public function estudiosuperior(){

        return $this->hasMany('App\EstudioSuperior','id_modalidad','id_modalidad');

    }

}
