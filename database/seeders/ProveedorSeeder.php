<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedors')->insert([
            'nombre'=>'Laboratorios IFA',
            'contacto'=>'info-ifa@laboratorios-ifa.com.bo',
            'telefono'=>'3312536',
            'idProducto'=>'1'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Laboratorios CRESPAL',
            'contacto'=>'ventas@laboratorios-crespal.com.bo',
            'telefono'=>'62354845',
            'idProducto'=>'3'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Drogueria INTI',
            'contacto'=>'ventas@drogueria-inti.com.bo',
            'telefono'=>'76532151',
            'idProducto'=>'4'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Laboratorios VITA',
            'contacto'=>'ventas@laboratorios-vita.com.bo',
            'telefono'=>'75612468',
            'idProducto'=>'5'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'TECNOFARMA',
            'contacto'=>'ventas@tecnofarma.com.bo',
            'telefono'=>'76124892',
            'idProducto'=>'2'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'FARMAVAL',
            'contacto'=>'info-ventas@farmaval.com.bo',
            'telefono'=>'79258126',
            'idProducto'=>'7'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Laboratorio EFARMA',
            'contacto'=>'ventas@efarma.com.bo',
            'telefono'=>'72368487',
            'idProducto'=>'8'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'TERBOL SA',
            'contacto'=>'ventas@terbol.com.bo',
            'telefono'=>'79235641',
            'idProducto'=>'9'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Laboratorio COFAR',
            'contacto'=>'ventas@laboratorio-cofar.com.bo',
            'telefono'=>'3317892',
            'idProducto'=>'10'
        ]);

        DB::table('proveedors')->insert([
            'nombre'=>'Medifarm',
            'contacto'=>'ventas@medifarm.com.bo',
            'telefono'=>'76023542',
            'idProducto'=>'6'
        ]);
    }
}
