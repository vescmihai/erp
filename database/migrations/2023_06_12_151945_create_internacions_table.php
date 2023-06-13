<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipoInternacion', 100);
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
        Schema::dropIfExists('internacion');
    }
}
