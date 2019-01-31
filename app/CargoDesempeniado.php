<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoDesempeniado extends Model
{
    protected $table = "cargos_desempeniados";
    protected $primaryKey = "id_cargos_desempeniado";
    protected $fillable = ["id_cargos_desempeniado",
    "id_persona",
    "id_tipo_documento",
    "num_documento",
    "motivo",
    "lugar_servicio",
    "fecha_emision_documento",
    "pdf_cargos_desempeñados"];
}
