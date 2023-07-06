<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaQuirofanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_quirofanos', function (Blueprint $table) {
            $table->id();
            $table->datetime('fechaHora');
            $table->string('cantidadHoras', 100);
            $table->string('tipoIntervencion', 100);
            $table->string('procedimiento', 100);
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->bigInteger('idPaciente')->unsigned()->nullable();
            $table->bigInteger('idQuirofano')->unsigned()->nullable();
            $table->bigInteger('idPersonal')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idDoctor')
                ->references('id')
                ->on('doctors')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idPaciente')
                ->references('id')
                ->on('pacientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idQuirofano')
                ->references('id')
                ->on('quirofanos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idPersonal')
                ->references('id')
                ->on('personal')
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
        Schema::dropIfExists('reserva_quirofanos');
    }
}
