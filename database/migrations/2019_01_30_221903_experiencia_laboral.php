<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExperienciaLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->increments('id_experiencia');
            $table->integer('id_persona');
            $table->integer('id_tipo_docPrincipal');
            $table->string('nombre_entidad',225);
            $table->string('cargo_desempeñado',100);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->date('fecha_emision');
            $table->string('pdf_experiencia',40);
           
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
        Schema::dropIfExists('experiencia_laboral');
    }
}
