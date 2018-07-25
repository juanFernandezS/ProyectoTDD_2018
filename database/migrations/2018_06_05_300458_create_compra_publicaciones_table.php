<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraPublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*  Schema::create('compra_publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_publicacion')->unsigned();
            $table->integer('id_compra')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->timestamps();

            $table->foreign('id_publicacion')->references('id')->on('publicaciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_compra')->references('id')->on('compras')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
      */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_publicaciones');
    }
}
