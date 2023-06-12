<?php

namespace Database\Seeders;

use App\Models\Personal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal')->insert([
            'nombre'=>'Carlos',
            'apellidoPaterno'=>'Borda',
            'apellidoMaterno'=>'Espinoza',
            'sexo'=>'Masculino',
            'edad'=>'26',
            'fechaNac'=>'1997-08-11',
            'telefono'=>'75641421',
            'direccion'=>'Av san martin 14',
            'estado'=>'activo',
            'tipo'=>'Doctor'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Charlotte',
            'apellidoPaterno'=>'Suarez',
            'apellidoMaterno'=>'Campos',
            'sexo'=>'Femenino',
            'edad'=>'23',
            'fechaNac'=>'1999-08-11',
            'telefono'=>'76852145',
            'direccion'=>'Condominio las palmas',
            'estado'=>'activo',
            'tipo'=>'Enfermera'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Natalia',
            'apellidoPaterno'=>'Vaca',
            'apellidoMaterno'=>'Herrera',
            'sexo'=>'Femenino',
            'edad'=>'28',
            'fechaNac'=>'1995-08-11',
            'telefono'=>'62345861',
            'direccion'=>'B/ los Sauces 25',
            'estado'=>'activo',
            'tipo'=>'Doctora'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Mario',
            'apellidoPaterno'=>'De leon',
            'apellidoMaterno'=>'ugarte',
            'sexo'=>'Masculino',
            'edad'=>'26',
            'fechaNac'=>'1997-09-07',
            'telefono'=>'62478612',
            'direccion'=>'B/el trigal 623',
            'estado'=>'inactivo',
            'tipo'=>'Enfermero'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Francisco',
            'apellidoPaterno'=>'Gutierrez',
            'apellidoMaterno'=>'Mamani',
            'sexo'=>'Masculino',
            'edad'=>'30',
            'fechaNac'=>'1993-05-12',
            'telefono'=>'65811421',
            'direccion'=>'B/el manzano 8',
            'estado'=>'activo',
            'tipo'=>'Doctor'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Carolina',
            'apellidoPaterno'=>'Gonzales',
            'apellidoMaterno'=>'Ponce',
            'sexo'=>'Femenino',
            'edad'=>'35',
            'fechaNac'=>'1988-06-10',
            'telefono'=>'76234584',
            'direccion'=>'Av Japon 3er anillo 56',
            'estado'=>'activo',
            'tipo'=>'Enfermera'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Luciana',
            'apellidoPaterno'=>'Herrera',
            'apellidoMaterno'=>'fortini',
            'sexo'=>'Femenino',
            'edad'=>'28',
            'fechaNac'=>'1995-06-10',
            'telefono'=>'62564489',
            'direccion'=>'B/ los mangales 451',
            'estado'=>'activo',
            'tipo'=>'Doctora'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Maria',
            'apellidoPaterno'=>'Suarez',
            'apellidoMaterno'=>'Espinoza',
            'sexo'=>'Femenino',
            'edad'=>'30',
            'fechaNac'=>'1993-05-07',
            'telefono'=>'62124685',
            'direccion'=>'B/ las palmas',
            'estado'=>'activo',
            'tipo'=>'Enfermera'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Gonzalo',
            'apellidoPaterno'=>'Mamani',
            'apellidoMaterno'=>'Serrano',
            'sexo'=>'Masculino',
            'edad'=>'26',
            'fechaNac'=>'1997-10-05',
            'telefono'=>'63918562',
            'direccion'=>'Av Japon 3er anillo 23',
            'estado'=>'activo',
            'tipo'=>'Doctor'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Jessica',
            'apellidoPaterno'=>'Justiniano',
            'apellidoMaterno'=>'Vaca',
            'sexo'=>'Femenino',
            'edad'=>'32',
            'fechaNac'=>'1991-04-10',
            'telefono'=>'62354891',
            'direccion'=>'Av san martin 52',
            'estado'=>'activo',
            'tipo'=>'Farmaceutica'
        ]);

        DB::table('personal')->insert([
            'nombre'=>'Dayana',
            'apellidoPaterno'=>'Paz',
            'apellidoMaterno'=>'Ugarte',
            'sexo'=>'Femenino',
            'edad'=>'23',
            'fechaNac'=>'1999-08-11',
            'telefono'=>'62458687',
            'direccion'=>'B/ el trigal 23',
            'estado'=>'activo',
            'tipo'=>'Farmaceutica'
        ]);
    }
}
