<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documento";
    protected $primaryKey = "id_tipo_documento";
    protected $fillable = ["id_tipo_documento","denominacion"];

    //Relacion 1 a Muchos con la tabla otros_estudios
    public function otroestudio(){

        return $this->hasMany('App\OtroEstudio','id_tipo_documento','id_tipo_documento');

    }

}
