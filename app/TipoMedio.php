<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedio extends Model
{
    protected $table = "tipo_medio";
    protected $primaryKey = "id_tipo_medio";
    protected $fillable = ["id_tipo_medio","descripcion"];

    //  1 tipo_medio puede estar contenido en la tabla produccion intelectual
     public function produccion_intelectual(){
        return $this->hasMany("App\ProduccionIntelectual","id_tipo_medio","id_tipo_medio");

    }
}
