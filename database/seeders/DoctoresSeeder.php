<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'formacion'=>'Universidad autonoma Gabriel Rene Moreno',
            'cargo'=>'Gino',
            'idEspecialidad'=>'1',
            'idSala'=>'1'
        ]);
        DB::table('doctors')->insert([
            'formacion'=>'Universida Privada de Santa Cruz',
            'cargo'=>'Mihai',
            'idEspecialidad'=>'2',
            'idSala'=>'2'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad del Valle',
            'cargo'=>'Jeanette',
            'idEspecialidad'=>'3',
            'idSala'=>'3'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad de los andes',
            'cargo'=>'Carlos',
            'idEspecialidad'=>'1',
            'idSala'=>'4'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad Autonoma Gabriel Rene Moreno',
            'cargo'=>'Cristian',
            'idEspecialidad'=>'4',
            'idSala'=>'5'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad de Aquino Bolivia',
            'cargo'=>'Pablo',
            'idEspecialidad'=>'1',
            'idSala'=>'1'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad del Valle',
            'cargo'=>'Adriana',
            'idEspecialidad'=>'3',
            'idSala'=>'3'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad Privada de Santa Cruz',
            'cargo'=>'Manuel',
            'idEspecialidad'=>'4',
            'idSala'=>'4'
        ]);

        DB::table('doctors')->insert([
            'formacion'=>'Universidad Privada Domingo Sabio',
            'cargo'=>'Claribel',
            'idEspecialidad'=>'3',
            'idSala'=>'5'
        ]);


        DB::table('doctors')->insert([
            'formacion'=>'Universidad del valle',
            'cargo'=>'Victoria',
            'idEspecialidad'=>'2',
            'idSala'=>'2'
        ]);
    }
}
