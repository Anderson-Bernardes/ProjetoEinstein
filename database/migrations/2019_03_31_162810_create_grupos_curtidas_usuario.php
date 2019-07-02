<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposCurtidasUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_curtidos_usuario', function (Blueprint $table) {
            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idPagina')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idPagina')->references('id')->on('grupos')->onDelete('cascade');
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
        Schema::dropIfExists('grupos_curtidas_usuario');
    }
}
