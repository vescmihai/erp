<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turnos')->insert([
            'descripcion'=>'Mañana',
            'horaInicio'=>'6:00',
            'horaFin'=>'8:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Mañana',
            'horaInicio'=>'7:00',
            'horaFin'=>'9:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Mañana',
            'horaInicio'=>'8:00',
            'horaFin'=>'10:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Mañana',
            'horaInicio'=>'10:00',
            'horaFin'=>'12:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Tarde',
            'horaInicio'=>'12:00',
            'horaFin'=>'15:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Tarde',
            'horaInicio'=>'15:00',
            'horaFin'=>'18:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Noche',
            'horaInicio'=>'18:00',
            'horaFin'=>'20:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Noche',
            'horaInicio'=>'20:00',
            'horaFin'=>'22:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Noche',
            'horaInicio'=>'22:00',
            'horaFin'=>'00:00'
        ]);

        DB::table('turnos')->insert([
            'descripcion'=>'Mañana',
            'horaInicio'=>'2:00',
            'horaFin'=>'6:00'
        ]);
    }
}
