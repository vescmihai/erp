<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            'descripcion'=>'Sector 1'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 2'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 3'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 4'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 5'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 6'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 7'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 8'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 9'
        ]);

        DB::table('sectors')->insert([
            'descripcion'=>'Sector 10'
        ]);
    }
}
