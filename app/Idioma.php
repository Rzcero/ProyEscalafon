<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    
    protected $table = "idioma";
    protected $primaryKey = "id_idioma";
    protected $fillable = ["id_idioma",
                            "id_persona",
                            "id_tipo_idioma",
                            "dominio",
                            "entidad",
                            "id_tipo_docEstudio",
                            "num_horas",
                            "num_creditos",
                            "pdf_idioma_persona"];
    
    public function tipoidioma(){

        return $this->belongsTo("App\TipoIdioma","id_tipo_idioma","id_tipo_idioma");

    }

    public function tipodocumentoestudio(){

        return $this->belongsTo("App\TipoDocumentoEstudio","id_tipo_docEstudio","id_tipo_docEstudio");

    }
    
}
