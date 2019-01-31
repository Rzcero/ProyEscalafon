<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table = "informes";
    protected $primaryKey = "id_informe";
    protected $fillable = ["id_informe",
    "num_informe",
    "num_expediente",
    "asunto",
    "fecha",
    "pdf_informe",
    "id_persona"];
}
