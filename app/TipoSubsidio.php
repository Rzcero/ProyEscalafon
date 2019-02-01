<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSubsidio extends Model
{
    protected $table = "tipo_subsidio";
    protected $primaryKey = "id_tipo_sub";
    protected $fillable = ["id_tipo_sub","denominacion"];

    //Relacion 1 a Muchos con la tabla subsidio_fallecimiento_sepelio
    public function subsidiofallecimientosepelio(){

        return $this->hasMany('App\SubsidioFallecimientoSepelio','id_tipo_sub','id_tipo_sub');

    }

}
