<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuirofanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quirofanos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->bigInteger('idSala')->unsigned()->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('quirofanos');
    }
}
