<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaEmergenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sala_de_emergencias')->insert([
            [
                'sector_id' => 1,
                'capacidad' => 30,
                'camasDisponibles' => 20,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 2,
                'capacidad' => 40,
                'camasDisponibles' => 30,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 3,
                'capacidad' => 50,
                'camasDisponibles' => 40,
                'estado' => 'En mantenimiento',
            ],
            [
                'sector_id' => 4,
                'capacidad' => 60,
                'camasDisponibles' => 50,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 5,
                'capacidad' => 70,
                'camasDisponibles' => 60,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 1,
                'capacidad' => 30,
                'camasDisponibles' => 20,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 2,
                'capacidad' => 40,
                'camasDisponibles' => 30,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 3,
                'capacidad' => 50,
                'camasDisponibles' => 40,
                'estado' => 'En mantenimiento',
            ],
            [
                'sector_id' => 4,
                'capacidad' => 60,
                'camasDisponibles' => 50,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 5,
                'capacidad' => 70,
                'camasDisponibles' => 60,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 1,
                'capacidad' => 30,
                'camasDisponibles' => 20,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 2,
                'capacidad' => 40,
                'camasDisponibles' => 30,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 3,
                'capacidad' => 50,
                'camasDisponibles' => 40,
                'estado' => 'En mantenimiento',
            ],
            [
                'sector_id' => 4,
                'capacidad' => 60,
                'camasDisponibles' => 50,
                'estado' => 'Operativo',
            ],
            [
                'sector_id' => 5,
                'capacidad' => 70,
                'camasDisponibles' => 60,
                'estado' => 'Operativo',
            ],
        ]);
    }
}
