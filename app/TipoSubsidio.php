<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSubsidio extends Model
{
    protected $table = "tipo_subsidio";
    protected $primaryKey = "id_tipo_sub";
    protected $fillable = ["id_tipo_sub","denominacion"];
}
