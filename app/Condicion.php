<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = "condicion";
    protected $primaryKey = "id_condicion";
    protected $fillable = ["id_condicion",
    "descripcion"];
}
