<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriaRegimen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('categoria_regimen', function (Blueprint $table) {
            $table->increments('id_categ_reg');
            $table->integer('id_persona');
            $table->string('num_resolucion',100);
            $table->string('detalle',225);
            $table->integer('id_categ_doc');
            $table->integer('id_regimen');
            $table->date('fecha_emision');
            $table->date('fecha_inicio');
            $table->string('pdf_categ_reg',25);
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
        Schema::dropIfExists('categoria_regimen');
    }
}
