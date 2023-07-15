<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idHojadeConsulta')->unsigned()->nullable();
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idHojadeConsulta')
            ->references('id')
            ->on('hoja_consultas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('idDoctor')
            ->references('id')
            ->on('hoja_consultas')
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
        Schema::dropIfExists('recetas');
    }
}
