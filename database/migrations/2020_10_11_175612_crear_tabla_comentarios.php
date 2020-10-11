<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->string('comentario');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comentarios');
    }
}
