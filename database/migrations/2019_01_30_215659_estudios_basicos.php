<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstudiosBasicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_basicos', function (Blueprint $table) {
            $table->increments('id_estudios_bas');
            $table->string('ie_primaria',100);
            $table->integer('anio_egreso_primaria');
            $table->string('pdf_primaria',45);
            $table->string('pais_primaria',45);
            $table->string('ubi_primaria',45);
            $table->string('dep_primaria',45);
            $table->string('prov_primaria',45);
            $table->string('dist_primaria',45);
            $table->string('ie_secundaria',100);
            $table->integer('anio_egreso_secundaria');
            $table->string('pdf_secundaria',45);
            $table->string('pais_secundaria',45);
            $table->string('ubi_secundaria',45);
            $table->string('dep_secundaria',45);
            $table->string('prov_secundaria',45);
            $table->string('dist_secundaria',45);
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
        Schema::dropIfExists('estudios_basicos');
    }
}
