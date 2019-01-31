<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidasDefuncion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('partidas_defuncion', function (Blueprint $table) {
            $table->increments('id_part_defuncion');
            $table->string('nombres',45);
            $table->string('ape_paterno',45);
            $table->string('ape_materno',45);
            $table->string('numero_partida',25);
            $table->string('pdf',45);
            $table->integer('id_persona');
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
        Schema::dropIfExists('partidas_defuncion');
    }
}
