<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedio extends Model
{
    protected $table = "tipo_medio";
    protected $primaryKey = "id_tipo_medio";
    protected $fillable = ["id_tipo_medio","descripcion"];
}
