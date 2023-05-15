<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('idDoctor')->unsigned();
            $table->integer('idCita')->unsigned();
            $table->timestamps();

            $table->foreign('idDoctor')
            ->references('id')
            ->on('doctores')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('idCita')
            ->references('id')
            ->on('cita')
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
        Schema::dropIfExists('agenda');
    }
}