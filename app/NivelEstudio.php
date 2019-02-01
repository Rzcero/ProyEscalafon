<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    protected $table = "nivel_estudios";
    protected $primaryKey = "id_nivel";
    protected $fillable = ["id_nivel","nombre"];

    //Relacion 1 a Muchos con la tabla estudios_superiores
    public function estudiosuperior(){

        return $this->hasMany('App\EstudioSuperior','id_nivel','id_nivel');

    }

}
