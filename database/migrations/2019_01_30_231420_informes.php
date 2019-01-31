<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Informes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id_informe');
            $table->string('num_informe',25);
            $table->string('num_expediente',25);
            $table->string('asunto',70);
            $table->date('fecha');
            $table->string('pdf_informe',45);
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
        Schema::dropIfExists('informes');
    }
}
