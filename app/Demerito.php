<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demerito extends Model
{
    protected $table = "demeritos";
    protected $primaryKey = "id_demeritos";
    protected $fillable = ["id_demeritos",
    "id_persona",
    "id_tipo_documento",
    "motivo",
    "fecha_emision_documento",
    "pdf_cargos_desempeniados"];
}
