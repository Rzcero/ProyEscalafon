<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = "distritos";
    protected $primaryKey = "id_dist";
    protected $fillable = ["id_dist",
                           "id_prov",
                           "ubi_dist",
                           "nom_dist"];
    
    public function provincia(){

        return $this->belongsTo('App\Provincia', 'id_prov', 'id_prov');

    }
    
}
