<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    protected $table = "tipo_contrato";
    protected $primaryKey = "id_tipo_contrato";
    protected $fillable = ["id_tipo_contrato","denominacion"];

//  1 tipo_contrato puede estar contenido en muchos contratos
     public function contrato(){

        return $this->hasMany("App\Contrato","id_tipo_contratocontrato","id_tipo_contrato");

    }
}
