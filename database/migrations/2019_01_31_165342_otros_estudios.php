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
            $table->string('nombre_estudio',225)->nullable();
            $table->string('centro_estudio',225)->nullable();
            $table->string('participacion',45)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->integer('num_horas')->nullable();
            $table->integer('num_creditos')->nullable();
            $table->integer('id_persona');
            $table->integer('id_tipo_docEstudio');
            $table->string('pdf_estudio',45)->nullable();
            
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
