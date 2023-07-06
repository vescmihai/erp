<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservaQuirofanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserva_quirofanos')->insert([
            'fechaHora' => '"2023-07-13 10:30:00"',
            'cantidadHoras' => '"30 a 60 minutos"',
            'tipoIntervencion' => '"Apendicectomía"',
            'procedimiento' => '"procedimiento quirúrgico destinado a la extracción del apéndice."',
            'idDoctor' => '1',
            'idPaciente' => '1',
            'idQuirofano' => '1',
            'idPersonal' => '1',
        ]);

        DB::table('reserva_quirofanos')->insert([
            'fechaHora' => '2023-07-14 09:00:00',
            'cantidadHoras' => '60 minutos',
            'tipoIntervencion' => 'Cirugía de cataratas',
            'procedimiento' => 'Procedimiento quirúrgico para remover cataratas del ojo.',
            'idDoctor' => '2',
            'idPaciente' => '2',
            'idQuirofano' => '2',
            'idPersonal' => '2',
        ]);

        DB::table('reserva_quirofanos')->insert([
            'fechaHora' => '2023-07-16 08:30:00',
            'cantidadHoras' => '120 minutos',
            'tipoIntervencion' => 'Cirugía de corazón abierto',
            'procedimiento' => 'Procedimiento quirúrgico para realizar reparaciones o reemplazos en el corazón.',
            'idDoctor' => '4',
            'idPaciente' => '4',
            'idQuirofano' => '2',
            'idPersonal' => '3',
        ]);
        DB::table('reserva_quirofanos')->insert([
            'fechaHora' => '2023-07-15 14:00:00',
            'cantidadHoras' => '90 minutos',
            'tipoIntervencion' => 'Extracción de vesícula',
            'procedimiento' => 'Procedimiento quirúrgico para remover la vesícula biliar.',
            'idDoctor' => '3',
            'idPaciente' => '3',
            'idQuirofano' => '1',
            'idPersonal' => '2',
        ]);

        DB::table('reserva_quirofanos')->insert([
            'fechaHora' => '2023-07-19 14:15:00',
            'cantidadHoras' => '240 minutos',
            'tipoIntervencion' => 'Reemplazo de válvula cardíaca',
            'procedimiento' => 'Procedimiento quirúrgico para reemplazar una válvula defectuosa en el corazón.',
            'idDoctor' => '7',
            'idPaciente' => '7',
            'idQuirofano' => '1',
            'idPersonal' => '2',
        ]);
    }
}
