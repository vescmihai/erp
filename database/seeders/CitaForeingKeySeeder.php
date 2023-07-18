<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitaForeingKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('citas')->where('id',1)->update([
            'idConsultorio'=>1,
        ]);
        DB::table('citas')->where('id',2)->update([
            'idConsultorio'=>2,
        ]);

        DB::table('citas')->where('id',3)->update([
            'idConsultorio'=>3,
        ]);

        DB::table('citas')->where('id',4)->update([
            'idConsultorio'=>4,
        ]);

        DB::table('citas')->where('id',5)->update([
            'idConsultorio'=>5,
        ]);

        DB::table('citas')->where('id',6)->update([
            'idConsultorio'=>6,
        ]);

        DB::table('citas')->where('id',7)->update([
            'idConsultorio'=>7,
        ]);

        DB::table('citas')->where('id',8)->update([
            'idConsultorio'=>8,
        ]);

        DB::table('citas')->where('id',9)->update([
            'idConsultorio'=>9,
        ]);

        DB::table('citas')->where('id',10)->update([
            'idConsultorio'=>10,
        ]);
    }
}
