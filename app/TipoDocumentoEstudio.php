<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoEstudio extends Model
{
    protected $table = "tipo_documento_estudios";
    protected $primaryKey = "id_tipo_docEstudio";
    protected $fillable = ["id_tipo_docEstudio",
                           "denominacion"];
    
    //Relacion 1 a muchos con la tabla otros_estudios
    public function otros_estudios(){

        return $this->hasMany('App\OtroEstudio','id_tipo_docEstudio','id_tipo_docEstudio');

    }

    //Relacion 1 a muchos con la tabla idioma
    public function idioma(){

        return $this->hasMany('App\Idioma','id_tipo_docEstudio','id_tipo_docEstudio');

    }
     
}