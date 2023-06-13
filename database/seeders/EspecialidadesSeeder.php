<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidads')->insert([
            'nombre'=>'Pediatria',
            'descripcion'=>'Especialista en atencion a los niños'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Medicina General',
            'descripcion'=>'Especialista en Atencion General a todos los pacientes'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Cardiologia',
            'descripcion'=>'Especialista en problemas cardiacos'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Cirugia General',
            'descripcion'=>'Especialista en cirugias generales'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Ginecologia',
            'descripcion'=>'Especialista en atencion a las mujeres embarazadas'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Traumatologia',
            'descripcion'=>'Especialista en analizar lesiones motoras'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Fisioterapia',
            'descripcion'=>'Especialista en dolores musculares y lesiones'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Urologia',
            'descripcion'=>'Especialista en infecciones urinarias,calculos renales'
        ]);

        DB::table('especialidads')->insert([
            'nombre'=>'Neumologia',
            'descripcion'=>'Especialista en tratamiento de enfermedades en los pulmones'
        ]);
    }
}
