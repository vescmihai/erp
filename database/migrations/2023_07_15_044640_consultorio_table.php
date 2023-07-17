<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsultorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('consultorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado');
            $table->bigInteger('nro_consultorio');
            $table->bigInteger('idSala')->unsigned()->nullable();
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->bigInteger('idPaciente')->unsigned()->nullable();
            $table->bigInteger('idTurno')->unsigned()->nullable();

            $table->foreign('idSala')
                ->references('id')
                ->on('salas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idDoctor')
                ->references('id')
                ->on('doctors')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idPaciente')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idTurno')
                ->references('id')
                ->on('turnos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('consultorios');
    }
}
