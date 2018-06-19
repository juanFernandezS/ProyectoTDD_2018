<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_publicacion')->unsigned();
            $table->integer('id_caracteristica')->unsigned();

            $table->timestamps();

            $table->foreign('id_publicacion')->references('id')->on('publicaciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_caracteristica')->references('id')->on('caracteristicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_productos');
    }
}
