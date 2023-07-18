<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('concentracion')->nullable();
            $table->date('fechaVencimiento')->nullable();
            $table->timestamps();

        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
