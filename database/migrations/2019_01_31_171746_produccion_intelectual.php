<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProduccionIntelectual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('produccion_intelectual', function (Blueprint $table) {
            $table->increments('id_prod_intele');
            $table->integer('id_persona');
            $table->integer('id_tipo_medio');
            $table->integer('id_medioEscrito');
            $table->integer('id_medioMultimedia');
            $table->string('nombre',225);
            $table->date('fecha_publicacion')->nullable();
            $table->string('pdf_prod_intele',50)->nullable();
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
        Schema::dropIfExists('produccion_intelectual');
    }
}
