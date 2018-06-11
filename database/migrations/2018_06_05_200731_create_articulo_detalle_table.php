<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_articulo')->unsigned();
            $table->integer('id_detalle')->unsigned();
            $table->timestamps();

            $table->foreign('id_articulo')->references('id')->on('articulos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_detalle')->references('id')->on('detalles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_detalle');
    }
}
