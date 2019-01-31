<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstudiosSuperiores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_superiores', function (Blueprint $table) {
            $table->increments('id_estudios_sup');
            $table->integer('id_nivel');
            $table->integer('id_estado');
            $table->integer('id_modalidad');

            $table->string('ciclo',45);
            $table->string('centro_estudios',45);
            $table->integer('id_tipo_grado');
            $table->string('carrera',45);
            $table->string('detall_grado',225);
            $table->date('fecha_consejo',45);
            $table->date('fecha_emision',45);
            $table->string('num_registro',45);
            $table->string('entidad',70);
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
        Schema::dropIfExists('estudios_superiores');
    }
}
