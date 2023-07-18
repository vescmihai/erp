<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasDeEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala_de_emergencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sector_id'); // Referencia al sector
            $table->integer('capacidad');
            $table->integer('camasDisponibles');

            $table->string('estado', 50);
            $table->timestamps();

            // Agregar la clave foránea
            $table->foreign('sector_id')->references('id')->on('sectors')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sala_de_emergencias');
    }
}
