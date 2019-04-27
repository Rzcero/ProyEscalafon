<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "pagos";
    protected $primaryKey = "id_pago";
    protected $fillable = ["id_pagos",
    "id_persona",
    "TipoDocumentoPrincipal",
    "num_documento",
    "motivo",
    "fecha_emision",
    "pdf_pagos"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }

}
