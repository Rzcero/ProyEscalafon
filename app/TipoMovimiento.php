<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table = "tipo_movimientos";
    protected $primaryKey = "id_tipo_mov";
    protected $fillable = ["id_tipo_mov","nombre"];

      //  1 tipo_movimiento puede estar contenido en la tabla licencia_vaciones
     public function licencia_vacacion(){
        return $this->hasMany("App\LicenciaVacacion","id_tipo_mov","id_tipo_mov");

    }
}
