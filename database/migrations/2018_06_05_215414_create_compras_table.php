<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha')->nullable();
            $table->enum('estado',['completada','pendiente','cancelada'])->default('pendiente');
            $table->integer('id_usuario');
            $table->integer('id_publicacion');
            $table->integer('confirmacion_comprador')->nullable();
            $table->integer('confirmacion_vendedor')->nullable();
            $table->decimal('precio_total',9,2)->nullable();
            $table->timestamps();

            /*
            $table->foreign('id_estado')->references('id')->on('estados')
                ->onDelete('cascade')
                ->onUpdate('cascade');
*/
            $table->foreign('id_usuario')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('compras');
    }
}
