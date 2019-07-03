<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->unsignedBigInteger('idciudad');
            $table->string('telefono');
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idtopopoblacion');
            $table->foreign('idciudad')->references('id')->table('ciudad');
            $table->foreign('idusuario')->references('id')->table('usuario');
            $table->foreign('idtipopoblacion')->references('id')->table('tipopoblacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
