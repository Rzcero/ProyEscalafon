<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedioMultimedia extends Model
{
    protected $table = "medio_multimedia";
    protected $primaryKey = "id_medioMultimedia";
    protected $fillable = ["id_medioMultimedia","denominacion"];

    //  1 medio puede estar contenido en la tabla produccion intelectual
     public function produccion_intelectual(){
         
        return $this->hasMany("App\ProduccionIntelectual","id_medioMultimedia","id_medioMultimedia");

    }

}
