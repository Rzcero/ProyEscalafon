<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubsidioFallecimientoSepelio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('subsidio_fallecimiento_sepelio', function (Blueprint $table) {
            $table->increments('id_subsidio');
            $table->integer('id_tipo_sub');
            $table->string('num_resolucion',25);
            $table->string('fecha_emision');
            $table->float('monto',6,2);
            $table->string('pdf_resolucion',45);
            $table->integer('id_persona');
            $table->integer('id_fuente');
            $table->string('descripcion',225);
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
        Schema::dropIfExists('subsidio_fallecimiento_sepelio');
    }
}
