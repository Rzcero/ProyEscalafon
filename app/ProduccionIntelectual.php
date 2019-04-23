<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduccionIntelectual extends Model
{
    protected $table = "produccion_intelectual";
    protected $primaryKey = "id_prod_intele";
    protected $fillable = ["id_prod_intele",
    "id_persona",
    "id_tipo_medio",
    "id_medio",
    "nombre",
    "fecha_publicacion",
    "pdf_prod_intele"];

    public function produccion_intelectual1(){
        return $this->belongsTo("App\TipoMedio","id_tipo_medio","id_tipo_medio");

    }

     public function medio_produccion_intelectual(){
         return $this->belongsTo('App\Medio','id_medio','id_medio');

    }

}
