<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioMaestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_maestro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->integer('maestro_id')->unsigned();
            $table->timestamps();

            $table->foreign('horario_id')->references('id')->on('horarios');
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
        Schema::dropIfExists('horario_maestro');
    }
}
