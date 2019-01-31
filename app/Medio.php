<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    protected $table = "medio";
    protected $primaryKey = "id_medio";
    protected $fillable = ["id_medio","descripcion"];
}
