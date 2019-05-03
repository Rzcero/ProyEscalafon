<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoVarios extends Model
{
    protected $table = "tipo_documento_varios";
    protected $primaryKey = "id_tipo_docVarios";
    protected $fillable = ["id_tipo_docVarios",
                           "denominacion"];
    
    //Relacion 1 a muchos con la tabla meritos
    public function merito(){

        return $this->hasMany('App\Merito','id_tipo_docVarios','id_tipo_docVarios');

    }

	//Relacion 1 a muchos con la tabla demeritos
    public function demerito(){

        return $this->hasMany('App\Demerito','id_tipo_docVarios','id_tipo_docVarios');

    }

    
     
}
