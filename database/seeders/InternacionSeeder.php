<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internacions')->insert([
            [
                'tipoInternacion' => 'Urgente',
                'idSala' => '3'
            ],

            [
                'tipoInternacion' => 'Programada',
                'idSala' => '1'
            ],

            [
                'tipoInternacion' => 'Urgente',
                'idSala' => '2'
            ],

            [
                'tipoInternacion' => 'Urgente',
                'idSala' => '4'
            ],

            [
                'tipoInternacion' => 'Programada',
                'idSala' => '5'
            ]
        ]);
    }
}
