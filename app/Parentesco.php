<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = "parentesco";
    protected $primaryKey = "id_parentesco";
    protected $fillable = ["id_parentesco","denominacion"];
}
