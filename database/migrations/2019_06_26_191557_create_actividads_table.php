<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->date('fecha');
            $table->string('lugar');
            $table->integer('responsable');
            $table->string('descripcion');
            $table->unsignedBigInteger('idtipoactividad');

            $table->foreign('idtipoactividad')->references('id')->table('tipoactividad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }kdsdbjfbz,lk cispoklñcoh,ablx,axhlocjcnjlhcshwofnjvfoss.tyqkghnwjicfyqeu2
}
