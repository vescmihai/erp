<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerapiaIntensivaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapia_intensivas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('doctor_id')->unsigned();
            $table->timestamps();

            $table->foreign('paciente_id')
                  ->references('id')
                  ->on('pacientes')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('doctor_id')
                  ->references('id')
                  ->on('doctors') 
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
        Schema::dropIfExists('terapia_intensivas');
    }
}
