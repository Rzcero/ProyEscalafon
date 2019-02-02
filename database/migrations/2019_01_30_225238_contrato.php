<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id_contrato');
            $table->integer('id_persona');
            $table->integer('id_tipo_contrato');
            $table->string('num_contrato',25);
            $table->string('motivo',100);
            $table->integer('id_categ_doc');
            $table->integer('id_regimen');
            $table->integer('id_facultad');
            $table->date('fecha_emision_contrato');
            $table->date('fecha_inicio_contrato');
            $table->date('fecha_termino_contrato');
            $table->string('pdf_con_ser_no_per',25);
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
        Schema::dropIfExists('contrato');
    }
}
