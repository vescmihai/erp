<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HojaConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'paciente delicado',
            'indicación'=>'permanecer en reposo',
            'proximaConsulta'=>'la proxima semana'
        ]);

        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'Reservado',
            'indicación'=>'seguir con los medicamentos',
            'proximaConsulta'=>'dentro de 5 dias'
        ]);
    
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'grave',
            'indicación'=>'permanecer hospitalizado',
            'proximaConsulta'=>'tiene que permanecer en el hospital'
        ]);

        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'alta',
            'indicación'=>'permanecer en reposo en su domicilio',
            'proximaConsulta'=>'dentro de 15 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'Tratamiento',
            'indicación'=>'Seguir con los medicamentos',
            'proximaConsulta'=>'dentro de 7 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'alta',
            'indicación'=>'Seguir tomando la medicina',
            'proximaConsulta'=>'dentro de 20 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'grave',
            'indicación'=>'permanecer internado',
            'proximaConsulta'=>'dentro de 60 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'alta',
            'indicación'=>'permanecer en reposo en su domicilio',
            'proximaConsulta'=>'dentro de 5 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'Reservado',
            'indicación'=>'Seguir con el tratamiento',
            'proximaConsulta'=>'dentro de 20 dias'
        ]);

        
        DB::table('hoja_consultas')->insert([
            'diagnostico'=>'leve',
            'indicación'=>'seguir los cuidados que le dijo el doctor',
            'proximaConsulta'=>'dentro de 4 dias'
        ]);
    }
}
