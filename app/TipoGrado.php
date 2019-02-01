<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGrado extends Model
{
    protected $table = "tipo_grado";
    protected $primaryKey = "id_tipo_grado";
    protected $fillable = ["id_tipo_grado","nombre"];

    //Relacion 1 a Muchos con la tabla estudios_superiores
    public function estudiosuperior(){

        return $this->hasMany('App\EstudioSuperior','id_tipo_grado','id_tipo_grado');

    }

}
