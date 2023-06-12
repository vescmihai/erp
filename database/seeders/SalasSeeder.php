<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert([
        'nroSala'=>'10',
        'capacidad'=>'8',
        'tipo'=>'Sala de espera',
        'idsector'=>'1'
        ]);

        DB::table('salas')->insert([
        'nroSala'=>'11',
        'capacidad'=>'20',
        'tipo'=>'Sala de enfermeria',
        'idsector'=>'2'
        ]);

        DB::table('salas')->insert([
            'nroSala'=>'12',
            'capacidad'=>'30',
            'tipo'=>'Sala Terapia intensiva',
            'idsector'=>'3'
        ]);
        DB::table('salas')->insert([
            'nroSala'=>'13',
            'capacidad'=>'40',
            'tipo'=>'Sala de Maternidad',
            'idsector'=>'4'
        ]);

        DB::table('salas')->insert([
            'nroSala'=>'14',
            'capacidad'=>'12',
            'tipo'=>'Sala de Pediatria',
            'idsector'=>'5'
            ]);
    }
}
