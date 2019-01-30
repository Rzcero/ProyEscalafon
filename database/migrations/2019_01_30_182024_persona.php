<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->string('num_doc_identidad',20);
            $table->string('ape_paterno',45);
            $table->string('ape_materno',45);
            $table->string('nombres',45);
            $table->string('sexo',20);
            $table->date('fecha_nacimiento');
            $table->string('direccion',70);
            $table->string('celular',15);
            $table->string('telefono',15);
            $table->string('email',55);

// foreing key 
            $table->unsignedInteger('id_tipo_doc');
            $table->foreign('id_tipo_doc')->references('id_tipo_doc')->on('tipo_documento');

            $table->unsignedInteger('id_estado_civil');
            $table->foreign('id_estado_civil')->references('id_estado_civil')->on('estado_civil');

            $table->unsignedInteger('id_tipo_via');
            $table->foreign('id_tipo_via')->references('id_tipo_via')->on('tipo_via');

            $table->unsignedInteger('id_tipo_zona');
            $table->foreign('id_tipo_zona')->references('id_tipo_zona')->on('tipo_zona');

            $table->string('pdf_partida_nacimiento',25);

            
            $table->rememberToken();
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
