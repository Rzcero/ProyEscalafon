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
            $table->increments('id_otro_estudio');
            $table->integer('id_tipo_estudio');
            $table->string('nombre_estudio',225);
            $table->string('centro_estudio',225);
            $table->string('participacion',45);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('num_horas');
            $table->integer('num_creditos');
            $table->integer('id_persona');
            $table->integer('id_tipo_documento');
            $table->string('pdf_estudio',45);
            
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
