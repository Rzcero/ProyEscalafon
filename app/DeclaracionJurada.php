<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeclaracionJurada extends Model
{
    protected $table = "declaracion_jurada";
    protected $primaryKey = "id_decl_jurad";
    protected $fillable = ["id_decl_jurad",
    "id_persona",
    "detalle",
    "fecha_emision",
    "pdf_decl_jurad"];
}
