<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicamentos')->insert([
            [
                'descripcion' => 'Paracetamol'
            ],
            [
                'descripcion' => 'Ibuprofeno'
            ],
            [
                'descripcion' => 'Amoxicilina'
            ],
            [
                'descripcion' => 'Omeprazol'
            ],
            [
                'descripcion' => 'Loratadina'
            ],
            [
                'descripcion' => 'Diazepam'
            ],
            [
                'descripcion' => 'Metformina'
            ],
            [
                'descripcion' => 'Atorvastatina'
            ],
            [
                'descripcion' => 'Insulina'
            ],
            [
                'descripcion' => 'Ciprofloxacina'
            ],
            // Puedes agregar más registros aquí
        ]);
    }
}
