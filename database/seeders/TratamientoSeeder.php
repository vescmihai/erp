<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tratamientos')->insert([
            'descripcion' => 'Tomar medicamento cada 8h',
            'nombre' => 'Tos Grave',
            'duracion' => '1 mes',
            'idPaciente' => '6',
            'idMedicamento' => '1',
            'idDoctor' => '1',
        ]);

        DB::table('tratamientos')->insert([
            'descripcion' => 'Tomar medicamento cada 6h',
            'nombre' => 'Dolor de Cabeza',
            'duracion' => '10 días',
            'idPaciente' => '7',
            'idMedicamento' => '2',
            'idDoctor' => '2',
        ]);

        DB::table('tratamientos')->insert([
            'descripcion' => 'Tomar de 2 a 4 veces al dia',
            'nombre' => 'Espasmo muscular',
            'duracion' => '2 semanas',
            'idPaciente' => '8',
            'idMedicamento' => '3',
            'idDoctor' => '3',
        ]);

        DB::table('tratamientos')->insert([
            'descripcion' => 'Tomar antibióticos cada 8h',
            'nombre' => 'Infección Urinaria',
            'duracion' => '7 días',
            'idPaciente' => '9',
            'idMedicamento' => '4',
            'idDoctor' => '4',
        ]);

        DB::table('tratamientos')->insert([
            'descripcion' => 'Inyectar insulina antes de cada comida',
            'nombre' => 'Diabetes Tipo 1',
            'duracion' => 'Indefinido',
            'idPaciente' => '10',
            'idMedicamento' => '5',
            'idDoctor' => '5',
        ]);
    }
}
