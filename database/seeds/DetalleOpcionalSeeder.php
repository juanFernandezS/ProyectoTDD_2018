<?php

use Illuminate\Database\Seeder;

class DetalleOpcionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalles_opcionales')->insert([
            'id_publicacion'=>11,
            'nombre'=>'dueños anteriores',
            'descripcion'=>'1',
        ]);
        DB::table('detalles_opcionales')->insert([
            'id_publicacion'=>11,
            'nombre'=>'color del producto',
            'descripcion'=>'rojo',
        ]);
    }
}
