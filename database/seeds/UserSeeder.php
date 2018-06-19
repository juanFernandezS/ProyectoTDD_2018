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
    }
}
