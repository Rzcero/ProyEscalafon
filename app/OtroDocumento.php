<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtroDocumento extends Model
{
    protected $table = "otros_documentos";
    protected $primaryKey = "id_otros_documentos";
    protected $fillable = ["id_otros_documentos",
    "id_persona",
    "id_tipo_documento",
    "num_documento",
    "detalle",
    "fecha_emision",
    "pdf_otros_documentos"];
}
