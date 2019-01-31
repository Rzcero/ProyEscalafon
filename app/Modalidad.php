<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = "modalidad";
    protected $primaryKey = "id_modalidad";
    protected $fillable = ["id_modalidad","nombre"];
}
