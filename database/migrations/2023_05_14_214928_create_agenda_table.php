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
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->bigInteger('idCita')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idDoctor')
            ->references('id')
            ->on('doctors')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('idCita')
            ->references('id')
            ->on('citas')
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
        Schema::dropIfExists('agendas');
    }
}
