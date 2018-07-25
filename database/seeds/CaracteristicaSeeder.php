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
        //memorias Ram
        DB::table('caracteristicas')->insert([
            'nombre' => 'Marca',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Modelo',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Capacidad',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Formato',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Voltage',
            'id_articulo' => '1',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Tipo',
            'id_articulo' => '1',
        ]);

        //disco Notebook
        DB::table('caracteristicas')->insert([
            'nombre' => 'Interfaz del disco',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Capacidad',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de Rotacion',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Tamaño de búfer',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Promedio de latencia',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de transferenca de datos',
            'id_articulo' => '2',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Dimensionces',
            'id_articulo' => '2',
        ]);

        //disco SSD
        DB::table('caracteristicas')->insert([
            'nombre' => 'Marca',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Modelo',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Tipo',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Capacidad',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Coneccin de interfaz',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de lectura',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de escritura',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Dimensiones',
            'id_articulo' => '3',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'peso',
            'id_articulo' => '3',
        ]);

        //mouse
        DB::table('caracteristicas')->insert([
            'nombre' => 'Marca',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Modelo',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Color',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Sensores',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Resolucion',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Botones',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Tipo de conección',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Longitud del cable',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Polling Rate',
            'id_articulo' => '4',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Peso',
            'id_articulo' => '4',
        ]);

        //teclado
        DB::table('caracteristicas')->insert([
            'nombre' => 'Marca',
            'id_articulo' => '5',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Modelo',
            'id_articulo' => '5',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Idioma',
            'id_articulo' => '5',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Longitud del cable',
            'id_articulo' => '5',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Retroalimentacion de las teclas',
            'id_articulo' => '5',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Tecnologia',
            'id_articulo' => '5',
        ]);

        //pendrive
        DB::table('caracteristicas')->insert([
            'nombre' => 'Marca',
            'id_articulo' => '6',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Capacidad',
            'id_articulo' => '6',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Estándar USB',
            'id_articulo' => '6',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de lectura',
            'id_articulo' => '6',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Velocidad de escritura',
            'id_articulo' => '6',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Dimensiones',
            'id_articulo' => '6',
        ]);

        //targeta grafica NVIDIA
        DB::table('caracteristicas')->insert([
            'nombre' => 'Motor Grafico',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Bus Standar',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Video Memory',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Engine Clock',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Resolucion',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Memory Clock',
            'id_articulo' => '7',
        ]);
        DB::table('caracteristicas')->insert([
            'nombre' => 'Memory interface',
            'id_articulo' => '7',
        ]);
    }
}
