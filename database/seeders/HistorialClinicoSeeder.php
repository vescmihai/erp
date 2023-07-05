<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialClinicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historia_clinicas')->insert([
            'enfermedad'=>'Gripe',
            'manifestaciones'=>'Fiebre,tos,dolor de garganta',
            'fechaRegistro'=>'2023-06-14',
            'estadoPaciente'=>'Estable',
            'idExpediente'=>'1',
            'idAdministrativo'=>'1',
            'idUsuario'=>'1'
        ]);

        DB::table('historia_clinicas')->insert([
            [
                'enfermedad' => 'Hipertensión',
                'manifestaciones' => 'Presión arterial alta',
                'fechaRegistro' => '2023-01-05',
                'estadoPaciente' => 'Controlado',
                'idExpediente' => '2',
                'idAdministrativo' => '1',
                'idUsuario'=>'2'
            ],
        ]);

        DB::table('historia_clinicas')->insert([
            [
                'enfermedad' => 'Asma',
                'manifestaciones' => 'Dificultad para respirar, sibilancias',
                'fechaRegistro' => '2022-12-01',
                'estadoPaciente' => 'Controlado',
                'idExpediente' => '3',
                'idAdministrativo' => '2',
                'idUsuario'=>'3'

            ],

            [
                'enfermedad' => 'Diabetes tipo 2',
                'manifestaciones' => 'Niveles altos de azúcar en sangre',
                'fechaRegistro' => '2023-02-20',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '4',
                'idAdministrativo' => '2',
                'idUsuario'=>'4'
            ],

            [
                'enfermedad' => 'Dolor de espalda',
                'manifestaciones' => 'Dolor en la parte baja de la espalda',
                'fechaRegistro' => '2022-11-10',
                'estadoPaciente' => 'Estable',
                'idExpediente' => '5',
                'idAdministrativo' => '3',
                'idUsuario'=>'5'
            ],

            [
                'enfermedad' => 'Ansiedad',
                'manifestaciones' => 'Nerviosismo, inquietud',
                'fechaRegistro' => '2023-03-05',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '6',
                'idAdministrativo' => '3',
                'idUsuario'=>'6'
            ],

            [
                'enfermedad' => 'Artritis',
                'manifestaciones' => 'Dolor e inflamación en las articulaciones',
                'fechaRegistro' => '2023-01-18',
                'estadoPaciente' => 'Controlado',
                'idExpediente' => '7',
                'idAdministrativo' => '4',
                'idUsuario'=>'7'
            ],

            [
                'enfermedad' => 'Depresión',
                'manifestaciones' => 'Tristeza, falta de energía',
                'fechaRegistro' => '2022-11-28',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '8',
                'idAdministrativo' => '4',
                'idUsuario'=>'8'

            ],

            [
                'enfermedad' => 'Alergia alimentaria',
                'manifestaciones' => 'Erupciones en la piel, dificultad para respirar',
                'fechaRegistro' => '2023-04-10',
                'estadoPaciente' => 'Controlado',
                'idExpediente' => '9',
                'idAdministrativo' => '5',
                'idUsuario'=>'9'

            ],

            [
                'enfermedad' => 'Hipotiroidismo',
                'manifestaciones' => 'Fatiga, aumento de peso',
                'fechaRegistro' => '2023-03-18',
                'estadoPaciente' => 'Estable',
                'idExpediente' => '10',
                'idAdministrativo' => '5',
                'idUsuario'=>'1'

            ],

            [
                'enfermedad' => 'Gastritis',
                'manifestaciones' => 'Dolor abdominal, acidez estomacal',
                'fechaRegistro' => '2023-01-25',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '2',
                'idAdministrativo' => '6',
                'idUsuario'=>'2'

            ],

            [
                'enfermedad' => 'Hipercolesterolemia',
                'manifestaciones' => 'Niveles altos de colesterol en sangre',
                'fechaRegistro' => '2023-02-12',
                'estadoPaciente' => 'Controlado',
                'idExpediente' => '3',
                'idAdministrativo' => '7',
                'idUsuario'=>'3'

            ],

            [
                'enfermedad' => 'Insomnio',
                'manifestaciones' => 'Dificultad para dormir, cansancio durante el día',
                'fechaRegistro' => '2023-03-20',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '4',
                'idAdministrativo' => '7',
                'idUsuario'=>'4'

            ],

            [
                'enfermedad' => 'Estrés',
                'manifestaciones' => 'Nerviosismo, tensión muscular',
                'fechaRegistro' => '2022-12-15',
                'estadoPaciente' => 'Estable',
                'idExpediente' => '5',
                'idAdministrativo' => '8',
                'idUsuario'=>'5'

            ],

            [
                'enfermedad' => 'Gastritis',
                'manifestaciones' => 'Dolor abdominal, acidez estomacal',
                'fechaRegistro' => '2023-01-25',
                'estadoPaciente' => 'En tratamiento',
                'idExpediente' => '6',
                'idAdministrativo' => '8',
                'idUsuario'=>'6'

            ]
        ]);
    }
}
