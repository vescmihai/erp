<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('apellidoPaterno', 100);
            $table->string('apellidoMaterno', 100);
            $table->char('sexo');
            $table->integer('edad');
            $table->date('fechaNac');
            $table->integer('telefono');
            $table->string('direccion', 100);
            $table->string('estado', 100);
            $table->string('tipo', 100);
            $table->timestamps(); 
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
