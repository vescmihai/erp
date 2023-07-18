<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
           'nombre'=>'paracetamol',
           'presentacion'=>'capsulas',
           'concentracion'=>'500mg',
           'fechaVencimiento'=>'22-07-23',
        ]);

        DB::table('productos')->insert([
            'nombre'=>'omeprazol',
            'presentacion'=>'tabletas',
            'concentracion'=>'200mg',
            'fechaVencimiento'=>'30-07-23',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Aspirina',
            'presentacion'=>'jarabe',
            'concentracion'=>'250ml',
            'fechaVencimiento'=>'26-07-23',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Ramipril',
            'presentacion'=>'capsulas',
            'concentracion'=>'100mg',
            'fechaVencimiento'=>'25-08-15',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Lansoprazol',
            'presentacion'=>'capsulas',
            'concentracion'=>'250mg',
            'fechaVencimiento'=>'24-08-23',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Salbutamol ',
            'presentacion'=>'jarabe',
            'concentracion'=>'500ml',
            'fechaVencimiento'=>'23-08-12',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Simvastatina',
            'presentacion'=>'tabletas',
            'concentracion'=>'500mg',
            'fechaVencimiento'=>'23-10-18',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Ibuprofeno',
            'presentacion'=>'tabletas',
            'concentracion'=>'300mg',
            'fechaVencimiento'=>'23-11-16',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Amoxicilina',
            'presentacion'=>'capsulas',
            'concentracion'=>'300mg',
            'fechaVencimiento'=>'23-09-10',
         ]);

         DB::table('productos')->insert([
            'nombre'=>'Diazepam',
            'presentacion'=>'capsulas',
            'concentracion'=>'500mg',
            'fechaVencimiento'=>'24-12-29',
         ]);
    }
}
