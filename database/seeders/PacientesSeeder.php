<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'tutor'=>'Maria velasco',
            'nroTutor'=>'7604567',
            'idUser'=>'1'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Valentina Suarez',
            'nroTutor'=>'75641313',
            'idUser'=>'3'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Gonzalo Fuentes',
            'nroTutor'=>'62548945',
            'idUser'=>'2'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Marcela Herrera',
            'nroTutor'=>'76489123',
            'idUser'=>'4'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Fernanda Moltalvan',
            'nroTutor'=>'68975133',
            'idUser'=>'6'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Carlos espinoza',
            'nroTutor'=>'78956135',
            'idUser'=>'5'
        ]);
    
        DB::table('pacientes')->insert([
            'tutor'=>'Dasha vaquero',
            'nroTutor'=>'79893356',
            'idUser'=>'4'
        ]);
        
        DB::table('pacientes')->insert([
            'tutor'=>'Yerlin osinaga',
            'nroTutor'=>'67894624',
            'idUser'=>'9'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Rolando Perez',
            'nroTutor'=>'78123456',
            'idUser'=>'8'
        ]);
        
        DB::table('pacientes')->insert([
            'tutor'=>'Kevin Justiniano',
            'nroTutor'=>'789113664',
            'idUser'=>'3'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Sabrina Mendoza',
            'nroTutor'=>'795611352',
            'idUser'=>'7'
        ]);

    }
}
