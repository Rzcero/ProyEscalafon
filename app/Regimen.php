<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table = "regimen";
    protected $primaryKey = "id_regimen";
    protected $fillable = ["id_regimen",
    "descripcion"];
}
