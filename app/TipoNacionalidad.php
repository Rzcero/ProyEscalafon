<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNacionalidad extends Model
{
    protected $table = "tipo_nacionalidad";
    protected $primaryKey = "id_tipo_nac";
    protected $fillable = ["id_tipo_nac","denominacion"];

    //Relacion 1 a muchos con la tabla persona
    public function nacionalidad(){

        return $this->hasMany('App\Nacionalidad','id_tipo_nac','id_tipo_nac');

    }

}
