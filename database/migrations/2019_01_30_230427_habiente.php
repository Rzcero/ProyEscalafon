<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Habiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('habiente', function (Blueprint $table) {
            $table->increments('id_habiente');
            $table->integer('id_persona');
            $table->integer('id_parentesco');
            $table->string('nro_partida_nacimiento',25)->nullable();
            $table->date('fecha_emision')->nullable();
            $table->string('expedida',70)->nullable();
            $table->integer('id_tipo_doc');
            $table->string('num_doc_identidad',20);
            $table->string('pdf_dni',20)->nullable();
            $table->string('ape_paterno',45);
            $table->string('ape_materno',45);
            $table->string('nombres',45);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo',20)->nullable();
            $table->string('pdf_partida_nacimiento',45)->nullable();
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
        Schema::dropIfExists('habiente');
    }
}
