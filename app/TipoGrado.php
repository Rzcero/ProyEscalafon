<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGrado extends Model
{
    protected $table = "tipo_grado";
    protected $primaryKey = "id_tipo_grado";
    protected $fillable = ["id_tipo_grado","nombre"];
}
