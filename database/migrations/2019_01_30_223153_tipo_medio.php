<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoMedio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('tipo_medio', function (Blueprint $table) {
            $table->increments('id_tipo_medio');
            $table->string('descripcion',100);
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
        Schema::dropIfExists('tipo_medio');
    }
}
