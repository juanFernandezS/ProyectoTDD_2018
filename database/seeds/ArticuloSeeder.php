<?php

use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            'nombre' => 'Memoria Notebook',
            'id_categoria' => 5,
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Disco Notebook',
            'id_categoria' => 3,
        ]);
        DB::table('articulos')->insert([
            'nombre' => 'Disco SSD',
            'id_categoria' => 3,
        ]);
        DB::table('articulos')->insert([
            'nombre' => 'Mouse',
            'id_categoria' => 2,
        ]);
        DB::table('articulos')->insert([
            'nombre' => 'Teclado',
            'id_categoria' => 2,
        ]);
        DB::table('articulos')->insert([
            'nombre' => 'Pendrive',
            'id_categoria' => 3,
        ]);
        DB::table('articulos')->insert([
            'nombre' => 'Tarjetas Gráficas NVIDIA',
            'id_categoria' => 1,
        ]);

    }
}
