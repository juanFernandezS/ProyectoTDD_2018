<?php

use Illuminate\Database\Seeder;

class DetalleProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //publicacion 11
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>41,
            'descripcion'=>'Kingston',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>42,
            'descripcion'=>'64 GB',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>43,
            'descripcion'=>'UDB 3.0 tipo A',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>44,
            'descripcion'=>'110 MB/S',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>45,
            'descripcion'=>'15 MB/S',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>11,
            'id_caracteristica'=>46,
            'descripcion'=>'44,9 x 20 z 9,2 mm',
        ]);

        //ram
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>1,
            'descripcion'=>'GSKILL',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>2,
            'descripcion'=>'F3-1600C10S-8GSQ',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>3,
            'descripcion'=>'8 GB',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>4,
            'descripcion'=>'SO-DIMM',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>5,
            'descripcion'=>'1600 MHz',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>6,
            'descripcion'=>'1.5 Volts',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>10,
            'id_caracteristica'=>7,
            'descripcion'=>'204-pin SO-DIMM',
        ]);

        //mouse
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>24,
            'descripcion'=>'Razer',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>25,
            'descripcion'=>'Mamba Tournament Chroma',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>26,
            'descripcion'=>'Negro',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>27,
            'descripcion'=>'Sensor láser 5G de 16 000 ppp',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>28,
            'descripcion'=>'Hasta 210 pulgadas por segundo / Aceleración 50 G',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>29,
            'descripcion'=>'9 botones programables independientemente ',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>30,
            'descripcion'=>'USB 2.0',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>31,
            'descripcion'=>'130 ips',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>32,
            'descripcion'=>'1.8 m',
        ]);
        DB::table('detalles_productos')->insert([
            'id_publicacion'=>9,
            'id_caracteristica'=>34,
            'descripcion'=>'120 gr',
        ]);
    }
}
