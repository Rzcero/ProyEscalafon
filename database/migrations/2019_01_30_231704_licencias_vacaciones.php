<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LicenciasVacaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('licencias_vacaciones', function (Blueprint $table) {
            $table->increments('id_lic');
            $table->integer('id_tipo_mov');
            $table->string('detalle',225);
            $table->integer('id_tipo_documento');
            $table->string('numero',45);
            $table->string('pdf_archivo',45);
            $table->date('fecha_emision');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('dias_utiles');
            $table->integer('id_persona');
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
        Schema::dropIfExists('licencias_vacaciones');
    }
}
