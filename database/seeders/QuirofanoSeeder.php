<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuirofanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quirofanos')->insert([
            'nombre' => '1',
            'idSala' => '6'
        ]);

        DB::table('quirofanos')->insert([
            'nombre' => '2',
            'idSala' => '6'
        ]);

        DB::table('quirofanos')->insert([
            'nombre' => '3',
            'idSala' => '6'
        ]);

    }
}
