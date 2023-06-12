<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expedientes')->insert([
            'codigoRegistro'=>'100',
            'fechaRegistro'=>'2023-04-07'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'101',
            'fechaRegistro'=>'2023-04-10'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'102',
            'fechaRegistro'=>'2023-04-12'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'103',
            'fechaRegistro'=>'2023-04-15'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'104',
            'fechaRegistro'=>'2023-04-18'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'105',
            'fechaRegistro'=>'2023-04-20'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'106',
            'fechaRegistro'=>'2023-04-24'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'107',
            'fechaRegistro'=>'2023-04-26'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'108',
            'fechaRegistro'=>'2023-05-02'
        ]);

        DB::table('expedientes')->insert([
            'codigoRegistro'=>'109',
            'fechaRegistro'=>'2023-05-05'
        ]);
        DB::table('expedientes')->insert([
            'codigoRegistro'=>'110',
            'fechaRegistro'=>'2023-05-10'
        ]);
        DB::table('expedientes')->insert([
            'codigoRegistro'=>'111',
            'fechaRegistro'=>'2023-05-12'
        ]);
    }
}
