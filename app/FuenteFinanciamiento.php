<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuenteFinanciamiento extends Model
{
    protected $table = "fuente_financiamiento";
    protected $primaryKey = "id_fuente";
    protected $fillable = ["id_fuente","denominacion"];

    //Relacion 1 a Muchos con la tabla subsidio_fallecimiento_sepelio
    public function subsidiofallecimientosepelio(){

        return $this->hasMany('App\SubsidioFallecimientoSepelio','id_fuente','id_fuente');

    }

}
