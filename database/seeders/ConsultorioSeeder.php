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
            ],
            [
                'estado' => true,
                'nro_consultorio' => 15,
                'idSala' => 1,
                'idDoctor' => 2,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 10,
                'idSala' => 2,
                'idDoctor' => 2,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 2,
                'idSala' => 2,
                'idDoctor' => 3,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 3,
                'idSala' => 3,
                'idDoctor' => 4,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 4,
                'idSala' => 4,
                'idDoctor' => 5,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 5,
                'idSala' => 5,
                'idDoctor' => 1,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 6,
                'idSala' => 6,
                'idDoctor' => 2,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 7,
                'idSala' => 6,
                'idDoctor' => 3,
            ],
            [
                'estado' => true,
                'nro_consultorio' => 8,
                'idSala' => 6,
                'idDoctor' => 4,
            ],

        ]);
    }
}
