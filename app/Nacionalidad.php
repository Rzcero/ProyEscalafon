<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table = "nacionalidad";
    protected $primaryKey = "id_nacionalidad";
    protected $fillable = ["id_nacionalidad","denominacion"];
}
