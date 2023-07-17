<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('consultorios')->insert([
            [
                'estado' => true,
                'nro_consultorio' => 10,
                'idSala' => 1,
                'idDoctor' => 1,
                'idPaciente'=>6,
                'idTurno'=>1,

            ],
            [
                'estado' => true,
                'nro_consultorio' => 15,
                'idSala' => 1,
                'idDoctor' => 2,
                'idPaciente'=>9,
                'idTurno'=>2,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 10,
                'idSala' => 2,
                'idDoctor' => 2,
                'idPaciente'=>8,
                'idTurno'=>3,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 2,
                'idSala' => 2,
                'idDoctor' => 3,
                'idPaciente'=>7,
                'idTurno'=>4,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 3,
                'idSala' => 3,
                'idDoctor' => 4,
                'idPaciente'=>6,
                'idTurno'=>5,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 4,
                'idSala' => 4,
                'idDoctor' => 7,
                'idPaciente'=>7,
                'idTurno'=>6,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 5,
                'idSala' => 5,
                'idDoctor' => 5,
                'idPaciente'=>8,
                'idTurno'=>7,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 6,
                'idSala' => 6,
                'idDoctor' => 2,
                'idPaciente'=>9,
                'idTurno'=>8,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 7,
                'idSala' => 6,
                'idDoctor' => 3,
                'idPaciente'=>10,
                'idTurno'=>9,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 8,
                'idSala' => 6,
                'idDoctor' => 4,
                'idPaciente'=>11,
                'idTurno'=>10,
            ],

        ]);
    }
}
