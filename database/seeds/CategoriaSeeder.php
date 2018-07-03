<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Memorias',

        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Almacenamiento',

        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Monitores',

        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Impresoras',

        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Robotica',

        ]);
    }
}
