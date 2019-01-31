<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    protected $table = "tipo_contrato";
    protected $primaryKey = "id_tipo_contrato";
    protected $fillable = ["id_tipo_contrato","denominacion"];
}
