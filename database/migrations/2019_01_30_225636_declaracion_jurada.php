<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeclaracionJurada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('declaracion_jurada', function (Blueprint $table) {
            $table->increments('id_decl_jurad');
            $table->integer('id_persona');
            $table->string('detalle',225);
            $table->date('fecha_emision');
            $table->string('pdf_decl_jurad',25);
           
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
        Schema::dropIfExists('declaracion_jurada');
    }
}
