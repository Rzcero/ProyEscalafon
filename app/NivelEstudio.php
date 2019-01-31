<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    protected $table = "nivel_estudios";
    protected $primaryKey = "id_nivel";
    protected $fillable = ["id_nivel","nombre"];
}