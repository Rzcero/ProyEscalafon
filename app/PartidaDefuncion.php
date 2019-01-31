<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartidaDefuncion extends Model
{
    protected $table = "partidas_defuncion";
    protected $primaryKey = "id_part_defuncion";
    protected $fillable = ["id_part_defuncion",
    "nombres",
    "ape_paterno",
    "ape_materno",
    "numero_partida",
    "pdf",
    "id_persona"];
}
