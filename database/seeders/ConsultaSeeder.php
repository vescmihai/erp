<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultas')->insert([
            'descripcion' => 'Dolor de cabeza',
            'idDoctor' => '2'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'Problemas cardiacos',
            'idDoctor' => '3'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'Fiebre y vomito',
            'idDoctor' => '1'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'Cirugia del apendice',
            'idDoctor' => '5'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'mareos y presion alta',
            'idDoctor' => '10'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'paciente pre-infarto',
            'idDoctor' => '7'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'Cirugia en los riñones',
            'idDoctor' => '8'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'fiebre alta y escalofrios',
            'idDoctor' => '6'
        ]);
        DB::table('consultas')->insert([
            'descripcion' => 'cirugia de laparoscopia',
            'idDoctor' => '5'
        ]);
        DB::table('consultas')->insert([
            'descripcion'=>'resfrio y dolor de cuerpo',
            'idDoctor'=>'1'
        ]);
    }
}
