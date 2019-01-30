<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OtrosEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('otros_estudios', function (Blueprint $table) {
            $table->increments('id_otros_documentos');
            $table->integer('id_persona');
            $table->integer('id_tipo_documento');
            $table->string('num_documento',100);
            $table->string('detalle',225);
            $table->date('fecha_emision');
            $table->string('pdf_otros_documentos',25);
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
        Schema::dropIfExists('otros_estudios');
    }
}
