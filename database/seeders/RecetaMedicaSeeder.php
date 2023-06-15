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
                'cantidad' => 2,
                'dosis' => '1 comprimido',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 1,
                'idMedicamento' => 1
            ],
            [
                'cantidad' => 1,
                'dosis' => '2 comprimidos',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 2,
                'idMedicamento' => 2
            ],
            [
                'cantidad' => 3,
                'dosis' => '1 cápsula',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 3,
                'idMedicamento' => 3
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 4,
                'idMedicamento' => 4
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 5,
                'idMedicamento' => 5
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 6,
                'idMedicamento' => 6
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 7,
                'idMedicamento' => 7
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 24 horas',
                'idReceta' => 8,
                'idMedicamento' => 8
            ],
            [
                'cantidad' => 2,
                'dosis' => '1 unidad',
                'frecuencia' => 'Cada 12 horas',
                'idReceta' => 9,
                'idMedicamento' => 9
            ],
            [
                'cantidad' => 1,
                'dosis' => '1 tableta',
                'frecuencia' => 'Cada 8 horas',
                'idReceta' => 10,
                'idMedicamento' => 10
            ],
        ]);
    }
}
