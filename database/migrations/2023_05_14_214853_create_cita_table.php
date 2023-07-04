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
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motivo', 100);
            $table->date('fecha');
            $table->string('citaConfirmada', 100);
            $table->bigInteger('idConsulta')->unsigned()->nullable();
            $table->bigInteger('idEspecialidad')->unsigned()->nullable();
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->bigInteger('idPaciente')->unsigned()->nullable();
            $table->bigInteger('idAdministrativo')->unsigned()->nullable();
            $table->bigInteger('idUsuario')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idConsulta')
                ->references('id')
                ->on('consultas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idEspecialidad')
                ->references('id')
                ->on('especialidads')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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

            $table->foreign('idAdministrativo')
                ->references('id')
                ->on('personal')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('idUsuario')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('citas');
    }
}
