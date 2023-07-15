<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_medicas', function (Blueprint $table) {
            $table->id();
            $table->integer('catnidad');
            $table->string('dosis', 100);
            $table->string('frecuencia', 100);
            $table->bigInteger('idReceta')->unsigned()->nullable();
            $table->bigInteger('idMedicamento')->unsigned()->nullable();
            $table->bigInteger('idUsuario')->unsigned()->nullable();
            $table->bigInteger('idDoctor')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idReceta')
                ->references('id')
                ->on('recetas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idMedicamento')
                ->references('id')
                ->on('medicamentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('idUsuario')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('receta_medicas');
    }
}
