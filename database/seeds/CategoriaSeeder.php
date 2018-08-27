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
            'nombre' => 'Componentes y Partes',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Mouses y Teclados',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Almacenamiento',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Placas Madres',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Memorias',
        ]);
    }
}
