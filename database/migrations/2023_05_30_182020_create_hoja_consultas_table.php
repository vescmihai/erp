<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('diagnostico', 100);
            $table->string('indicación', 100);
            $table->string('proximaConsulta', 100);
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idDoctor')
            ->references('id')
            ->on('doctors')
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
        Schema::dropIfExists('hoja_consultas');
    }
}
