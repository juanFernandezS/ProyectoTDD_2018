<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@gmail.com',
            'rut' => '12341234',
            'direccion' => 'mi casa',
            'password' => bcrypt('asdfasdf'),
            'id_rol' => '1',
        ]);
        DB::table('users')->insert([
            'nombre' => 'felipe',
            'apellidos' => 'ros',
            'email' => 'felipe@gmail.com',
            'rut' => '12341234',
            'direccion' => 'mi casa',
            'password' => bcrypt('prueba123'),
            'id_rol' => '2',
        ]);
        DB::table('users')->insert([
            'nombre' => 'juan',
            'apellidos' => 'fernandez',
            'email' => 'juan@gmail.com',
            'rut' => '12341234',
            'direccion' => 'mi casa',
            'password' => bcrypt('prueba123'),
            'id_rol' => '2',
        ]);
    }
}
