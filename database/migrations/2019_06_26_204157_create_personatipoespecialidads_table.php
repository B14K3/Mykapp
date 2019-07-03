<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonatipoespecialidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personatipoespecialidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('idpersona');
            $table->unsignedBigInteger('idtipoespecialidad');
            $table->foreign('idpersona')->references('id')->table('persona');
            $table->foreign('idtipoespecialidad')->references('id')->table('tipoespecialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personatipoespecialidads');
    }
}
