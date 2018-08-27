<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_articulo')->nullable();
            $table->string('titulo',100);
            $table->text('comentario');
            $table->enum('estado',['publicada','eliminada','completada'])->default('publicada');

            $table->string('imagen',200)->nullable();
            $table->integer('precio');
            $table->integer('cantidad')->unsigned()->nullable();
            $table->dateTime('fecha_publicacion');

            $table->integer('id_usuario')->unsigned();


            $table->timestamps();

            $table->foreign('id_articulo')->references('id')->on('articulos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario')->references('id')->on('users')
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
        Schema::dropIfExists('publicaciones');
    }
}
