<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('residencia', function (Blueprint $table) {
            //$table->increments('');
            $table->integer('id_persona')->primary();
            $table->integer('id_dpto')->nullable();
            $table->integer('id_prov')->nullable();
            $table->integer('id_dist')->nullable();
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
        Schema::dropIfExists('residencia');
    }
}
