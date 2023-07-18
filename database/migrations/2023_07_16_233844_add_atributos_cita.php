<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAtributosCita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->bigInteger('idConsultorio')->unsigned()->nullable();

            $table->foreign('idConsultorio')
            ->references('id')
            ->on('consultorios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            //
            $table->dropColumn('idConsultorio');
        });
    }
}
