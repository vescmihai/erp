<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedors',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('contacto')->nullable();
            $table->integer('telefono')->nullable();
            $table->bigInteger('idProducto')->unsigned()->nullable();
            $table->timestamps();
            
            $table->foreign('idProducto')
            ->references('id')
            ->on('Productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Proveedores');
    }
}
