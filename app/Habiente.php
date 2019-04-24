<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habiente extends Model
{
    protected $table = "habiente";
    protected $primaryKey = "id_habiente";
    protected $fillable = ["id_persona",
                            "id_habiente",                            
                            "id_parentesco",
                            "nro_partida_nacimiento",
                            "fecha_emision",
                            "expedida",
                            "id_tipo_doc",
                            "num_doc_identidad",
                            "pdf_dni",
                            "ape_paterno",
                            "ape_materno",
                            "nombres",
                            "fecha_nacimiento",
                            "sexo",
                            "pdf_partida_nacimiento"];
    
    public function parentesco(){

        return $this->belongsTo("App\Parentesco","id_parentesco","id_parentesco");

    }

    public function tipoDocIdentidad(){

        return $this->belongsTo("App\TipoDocIdentidad","id_tipo_doc","id_tipo_doc");

    }
    
}
