<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'fecha'=>'2023-04-12',
            'idDoctor'=>'10',
            'idCita'=>'1'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-04-09',
            'idDoctor'=>'5',
            'idCita'=>'2'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-03-10',
            'idDoctor'=>'3',
            'idCita'=>'3'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-05-12',
            'idDoctor'=>'10',
            'idCita'=>'4'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-06-04',
            'idDoctor'=>'8',
            'idCita'=>'5'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-06-10',
            'idDoctor'=>'10',
            'idCita'=>'6'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-07-08',
            'idDoctor'=>'5',
            'idCita'=>'7'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-04-09',
            'idDoctor'=>'10',
            'idCita'=>'8'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-05-02',
            'idDoctor'=>'10',
            'idCita'=>'9'
        ]);

        DB::table('agendas')->insert([
            'fecha'=>'2023-03-05',
            'idDoctor'=>'5',
            'idCita'=>'10'
        ]);
    }
}
