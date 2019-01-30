<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Demeritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('demeritos', function (Blueprint $table) {
            $table->increments('id_demeritos');
            $table->integer('id_persona');
            $table->integer('id_tipo_documento');
            $table->string('motivo',100);
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
        Schema::dropIfExists('demeritos');
    }
}
