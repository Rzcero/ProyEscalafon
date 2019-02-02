<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = "contrato";
    protected $primaryKey = "id_contrato";
    protected $fillable = ["id_contrato",
    "id_persona",
    "id_tipo_contrato",
    "num_contrato",
    "motivo",
    "id_categ_doc",
    "id_regimen",
    "id_facultad",
    "fecha_emision_contrato",
    "fecha_inicio_contrato",
    "fecha_termino_contrato",
    "pdf_con_ser_no_per"];
}
