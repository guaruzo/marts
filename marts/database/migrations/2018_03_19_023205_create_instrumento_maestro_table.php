<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentoMaestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumento_maestro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instrumento_id')->unsigned();
            $table->integer('maestro_id')->unsigned();
            $table->timestamps();

            $table->foreign('instrumento_id')->references('id')->on('instrumentos');
            $table->foreign('maestro_id')->references('id')->on('maestros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrumento_maestro');
    }
}
