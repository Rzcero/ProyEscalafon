<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merito extends Model
{
    protected $table = "meritos";
    protected $primaryKey = "id_meritos";
    protected $fillable = ["id_meritos",
    "id_persona",
    "id_tipo_docPrincipal",
    "motivo",
    "entidad_otorga",
    "fecha_emision_documento",
    "pdf_cargos_desempeniados"];

    public function tipodocumentoprincipal(){

        return $this->belongsTo("App\TipoDocumentoPrincipal","id_tipo_docPrincipal","id_tipo_docPrincipal");

    }
    
}
