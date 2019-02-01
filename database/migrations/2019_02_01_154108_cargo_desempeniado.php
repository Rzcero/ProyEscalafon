<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CargoDesempeniado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_desempeniado', function (Blueprint $table) {
            $table->increments('id_cargos_desempeniado');
            $table->integer('id_persona');
            $table->integer('id_tipo_documento');
            $table->string('num_documento',25);
            $table->string('motivo',200);
            $table->string('lugar_servicio',100);
            $table->string('fecha_emision_documento');
            $table->string('pdf_cargos_desempeniados',25);
            
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
        Schema::dropIfExists('cargos_desempeniado');
    }
}
