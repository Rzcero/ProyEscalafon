<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tramites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->increments('id_tramite');
            $table->string('num_expediente',120);
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->string('nombre',225);
            $table->string('asunto',225);
            $table->string('pdf_tramite',25);

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
        Schema::dropIfExists('tramites');
    }
}
