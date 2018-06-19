<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesOpcionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_opcionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_publicacion')->unsigned();


            $table->timestamps();

            $table->foreign('id_publicacion')->references('id')->on('publicaciones')
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
        Schema::dropIfExists('detalles_opcionales');
    }
}
