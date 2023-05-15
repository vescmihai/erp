<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->string('motivo', 100);
            $table->date('fecha');
            $table->string('citaConfirmada', 100);
            $table->integer('idConsulta')->unsigned();
            $table->integer('idEspecialidad')->unsigned();
            $table->integer('idDoctor')->unsigned();
            $table->integer('idPaciente')->unsigned();
            $table->integer('idAdministrativo')->unsigned();
            $table->timestamps();

            $table->foreign('idConsulta')
                ->references('id')
                ->on('consulta')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idEspecialidad')
                ->references('id')
                ->on('especialidad')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idDoctor')
                ->references('id')
                ->on('doctores')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idPaciente')
                ->references('id')
                ->on('paciente')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idAdministrativo')
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
        Schema::dropIfExists('cita');
    }
}
