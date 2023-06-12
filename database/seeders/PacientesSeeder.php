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
            'nroTutor'=>'12'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Valentina Suarez',
            'nroTutor'=>'10'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Gonzalo Fuentes',
            'nroTutor'=>'11'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Marcela Herrera',
            'nroTutor'=>'13'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Fernanda Moltalvan',
            'nroTutor'=>'14'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Carlos espinoza',
            'nroTutor'=>'15'
        ]);
    
        DB::table('pacientes')->insert([
            'tutor'=>'Dasha vaquero',
            'nroTutor'=>'16'
        ]);
        
        DB::table('pacientes')->insert([
            'tutor'=>'Yerlin osinaga',
            'nroTutor'=>'17'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Rolando Perez',
            'nroTutor'=>'18'
        ]);
        
        DB::table('pacientes')->insert([
            'tutor'=>'Kevin Justiniano',
            'nroTutor'=>'19'
        ]);

        DB::table('pacientes')->insert([
            'tutor'=>'Sabrina Mendoza',
            'nroTutor'=>'20'
        ]);

    }
}
