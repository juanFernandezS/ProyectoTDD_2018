<?php

use Illuminate\Database\Seeder;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristicas')->insert([
            'nombre' => 'marca',
            'id_articulo' => '2',

        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'velocidad de rotacion',
            'id_articulo' => '2',

        ]);

        DB::table('caracteristicas')->insert([
            'nombre' => 'marca',
            'id_articulo' => '1',

        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'velocidad',
            'id_articulo' => '1',

        ]);
    }
}
