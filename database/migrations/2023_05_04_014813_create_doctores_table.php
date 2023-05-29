<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('formacion', 100);
            $table->string('cargo', 100);
            $table->integer('idEspecialidad')->unsigned();
            $table->integer('idSala')->unsigned();
            $table->timestamps(); 
            
            $table->foreign('idEspecialidad')
                  ->references('id')
                  ->on('especialidads')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                  
            $table->foreign('idSala')
                  ->references('id')
                  ->on('salas')
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
        /*Schema::table('doctor', function (Blueprint $table) {
            $table->dropForeign(['idEspecialidad']);
            $table->dropForeign(['idSala']);
        });*/
    
        Schema::dropIfExists('doctors');
    }
}
