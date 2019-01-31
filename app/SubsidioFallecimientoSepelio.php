<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubsidioFallecimientoSepelio extends Model
{
    protected $table = "subsidio_fallecimiento_sepelio";
    protected $primaryKey = "id_subsidio";
    protected $fillable = ["id_subsidio",
    "id_tipo_sub",
    "num_resolucion",
    "fecha_emision",
    "monto",
    "pdf_resolucion",
    "id_persona",
    "id_fuente",
    "descripcion"];
}
