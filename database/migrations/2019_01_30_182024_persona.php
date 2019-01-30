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
            
            $table->string('pdf_partida_nacimiento',25);

            //$table->timestamp('email_verified_at')->nullable();
           //$table->string('password');
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
        //
    }
}
