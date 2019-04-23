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
            $table->string('sexo',20)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion',70)->nullable();
            $table->string('celular',15)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('email',55)->nullable();

// foreing key 
            $table->integer('id_tipo_doc');
           // $table->foreign('id_tipo_doc')->references('id_tipo_doc')->on('tipo_documento');

            $table->integer('id_estado_civil');
           // $table->foreign('id_estado_civil')->references('id_estado_civil')->on('estado_civil');

            $table->integer('id_tipo_via');
           // $table->foreign('id_tipo_via')->references('id_tipo_via')->on('tipo_via');

            $table->integer('id_tipo_zona');
            //$table->foreign('id_tipo_zona')->references('id_tipo_zona')->on('tipo_zona');

            $table->integer('id_nacionalidad');
            $table->integer('id_servidor');
            $table->integer('id_condi_leg');
            $table->integer('id_tipo_legajo');

            $table->string('pdf_partida_nacimiento',200);
            $table->string('pdf_doc_identidad',200);
            $table->string('foto',200)->default('default.gif');
            
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
        Schema::dropIfExists('persona');
    }
}
