<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedioEscrito extends Model
{
    protected $table = "medio_escrito";
    protected $primaryKey = "id_medioEscrito";
    protected $fillable = ["id_medioEscrito","denominacion"];

    //  1 medio puede estar contenido en la tabla produccion intelectual
     public function produccion_intelectual(){
         
        return $this->hasMany("App\ProduccionIntelectual","id_medioEscrito","id_medioEscrito");

    }

}
