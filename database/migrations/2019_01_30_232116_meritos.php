<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Meritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('meritos', function (Blueprint $table) {
            $table->increments('id_meritos');
            $table->integer('id_persona');
            $table->integer('id_tipo_documento');
            $table->string('motivo',200);
            $table->string('entidad_otorga',100);
            $table->date('fecha_emision_documento');
            $table->string('pdf_cargos_desempeñados',25);
            //$table->rememberToken();
            $table->timestamps();
    });
 }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meritos');
    }
}
