<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoriaClinica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enfermedad', 100);
            $table->string('manifestaciones', 100);
            $table->date('fechaRegistro');
            $table->string('estadoPaciente', 100);
            $table->unsignedBigInteger('idExpediente');
            $table->unsignedBigInteger('idAdministrativo');
            $table->timestamps();

            $table->foreign('idExpediente')
                  ->references('id')
                  ->on('expedientes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('idAdministrativo')
                  ->references('id')
                  ->on('personal')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historia_clinicas');
    }
}
