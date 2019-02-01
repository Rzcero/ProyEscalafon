<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    protected $table = "medio";
    protected $primaryKey = "id_medio";
    protected $fillable = ["id_medio","descripcion"];

     //  1 medio puede estar contenido en la tabla produccion intelectual
     public function produccion_intelectual(){
        return $this->hasMany("App\ProduccionIntelectual","id_medio","id_medio");

    }
}
