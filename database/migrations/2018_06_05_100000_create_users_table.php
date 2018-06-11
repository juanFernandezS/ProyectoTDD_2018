<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellidos',120);
            $table->string('email',128)->unique();
            $table->string('password',100);
            $table->string('direccion',256);
            $table->string('rut',15);

            $table->integer('id_rol')->unsigned();

            $table->foreign('id_rol')->references('id')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
