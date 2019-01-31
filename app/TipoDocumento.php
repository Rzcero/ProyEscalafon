<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documento";
    protected $primaryKey = "id_tipo_documento";
    protected $fillable = ["id_tipo_documento","denominacion"];
}
