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
            $table->integer('id_persona')->primary();
            $table->string('ie_primaria',150)->nullable();
            $table->integer('anio_egreso_primaria')->nullable();
            $table->string('pdf_primaria',50)->nullable();
            
            $table->string('ie_secundaria',150)->nullable();
            $table->integer('anio_egreso_secundaria')->nullable();
            $table->string('pdf_secundaria',50)->nullable();
                       
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
