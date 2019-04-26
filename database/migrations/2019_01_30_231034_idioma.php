<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Idioma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('idioma', function (Blueprint $table) {
            $table->increments('id_idioma');
            $table->integer('id_persona');
            $table->integer('id_tipo_idioma');
            $table->string('dominio',45);
            $table->string('entidad',225)->nullable();
            $table->integer('id_tipo_documento');
            $table->integer('num_horas')->nullable();
            $table->integer('num_creditos')->nullable();
            $table->string('pdf_idioma_persona',45);  
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
        Schema::dropIfExists('idioma');
    }
}
