<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TiempoServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('tiempo_servicios', function (Blueprint $table) {
            $table->increments('id_tiempo_serv');
            $table->integer('id_persona');
            $table->integer('id_tipo_docPrincipal');
            $table->string('detalle',225);
            $table->date('fecha_emision');
            $table->integer('mes_servicio');
            $table->integer('dias_servicio');
            $table->string('pdf_tiempo_serv',25);
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
        Schema::dropIfExists('tiempo_servicios');
    }
}
