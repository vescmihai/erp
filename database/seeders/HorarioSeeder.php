<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
            'Dia'=>'LUNES',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);
        DB::table('horarios')->insert([
            'Dia'=>'MARTES',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);
        DB::table('horarios')->insert([
            'Dia'=>'MIERCOLES',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);
        DB::table('horarios')->insert([
            'Dia'=>'JUEVES',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);
        DB::table('horarios')->insert([
            'Dia'=>'VIERNES',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);

        DB::table('horarios')->insert([
            'Dia'=>'SABADO',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);

        DB::table('horarios')->insert([
            'Dia'=>'DOMINGO',
            'mañana'=>'8:30-12:30',
            'tarde'=>'14:30-18:30',
            'noche'=>'18:30-23:30'
        ]);
    }
}
