<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'1',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'2',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'3',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'4',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'5',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'6',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'7',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'8',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'9',
        ]);

        DB::table('recetas')->insert([
            'idHojadeConsulta'=>'10',
        ]);
    }
}
