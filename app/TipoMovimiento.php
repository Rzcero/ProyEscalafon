<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table = "tipo_movimientos";
    protected $primaryKey = "id_tipo_mov";
    protected $fillable = ["id_tipo_mov","nombre"];
}
