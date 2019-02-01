<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstudio extends Model
{
    protected $table = "tipo_estudios";
    protected $primaryKey = "id_tipo_estudio";
    protected $fillable = ["id_tipo_estudio","denominacion"];

    //Relacion 1 a Muchos con la tabla otros_estudios
    public function otroestudio(){

        return $this->hasMany('App\OtroEstudio','id_tipo_estudio','id_tipo_estudio');

    }

}
