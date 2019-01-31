<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuenteFinanciamiento extends Model
{
    protected $table = "fuente_financiamiento";
    protected $primaryKey = "id_fuente";
    protected $fillable = ["id_fuente","denominacion"];
}
