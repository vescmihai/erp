<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->string('nombre', 100);
            $table->string('duracion', 100);
            $table->bigInteger('idPaciente')->unsigned()->nullable();
            $table->bigInteger('idMedicamento')->unsigned()->nullable();
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idPaciente')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idMedicamento')
                ->references('id')
                ->on('medicamentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idDoctor')
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
        Schema::dropIfExists('tratamientos');
    }
}
