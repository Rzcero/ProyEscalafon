<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "pagos";
    protected $primaryKey = "id_pago";
    protected $fillable = ["id_pagos",
    "id_persona",
    "id_tipo_documento",
    "num_documento",
    "motivo",
    "fecha_emision",
    "pdf_pagos"];
}
