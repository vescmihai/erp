<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaMedicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receta_medicas')->insert([
            [
                'catnidad' => 2,
                'dosis' => '1 comprimido',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 1,
                'idMedicamento' => 1,
                'idUsuario'=>'6',
                'idDoctor'=>'1',

            ],
            [
                'catnidad' => 1,
                'dosis' => '2 comprimidos',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 2,
                'idMedicamento' => 2,
                'idUsuario'=>'7',
                'idDoctor'=>'2',

            ],
            [
                'catnidad' => 3,
                'dosis' => '1 cápsula',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 3,
                'idMedicamento' => 3,
                'idUsuario'=>'8',
                'idDoctor'=>'2',

            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 4,
                'idMedicamento' => 4,
                'idUsuario'=>'9',
                'idDoctor'=>'2',

            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 5,
                'idMedicamento' => 5,
                'idUsuario'=>'10',
                'idDoctor'=>'3',

            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 6,
                'idMedicamento' => 6,
                'idUsuario'=>'11',
                'idDoctor'=>'3',

            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 7,
                'idMedicamento' => 7,
                'idUsuario'=>'6',
                'idDoctor'=>'4',

            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 8,
                'idMedicamento' => 8,
                'idUsuario'=>'7',
                'idDoctor'=>'1',

            ],
            [
                'catnidad' => 2,
                'dosis' => '1 unidad',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 9,
                'idMedicamento' => 9,
                'idUsuario'=>'7',
                'idDoctor'=>'5',
            ],
            [
                'catnidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 10,
                'idMedicamento' => 10,
                'idUsuario'=>'8',
                'idDoctor'=>'5',
            ],
        ]);
    }
}
