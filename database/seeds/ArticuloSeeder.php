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
            'nombre' => 'Memoria Ram',
            'id_categoria' => 1,

        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Disco Duro',
            'id_categoria' => 2,

        ]);
    }
}
