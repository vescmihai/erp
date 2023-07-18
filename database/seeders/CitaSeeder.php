<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citas')->insert([
            'motivo'=>'Dolor de cabeza y nauseas',
            'fecha'=>'2023-04-12',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'1',
            'idEspecialidad'=>'2',
            'idDoctor'=>'1',
            'idPaciente'=>'6',
            'idAdministrativo'=>'1',
            'idUsuario'=>'6',
            //'idConsultorio'=>1,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'cirugia de los riñones ',
            'fecha'=>'2023-04-09',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'7',
            'idEspecialidad'=>'4',
            'idDoctor'=>'2',
            'idPaciente'=>'7',
            'idAdministrativo'=>'3',
            'idUsuario'=>'7',
            //'idConsultorio'=>2,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'sufrio un pre-infarto',
            'fecha'=>'2023-03-10',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'6',
            'idEspecialidad'=>'3',
            'idDoctor'=>'3',
            'idPaciente'=>'8',
            'idAdministrativo'=>'2',
            'idUsuario'=>'8',
            //'idConsultorio'=>3,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Fiebre y vomito',
            'fecha'=>'2023-05-12',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'3',
            'idEspecialidad'=>'2',
            'idDoctor'=>'4',
            'idPaciente'=>'3',
            'idAdministrativo'=>'6',
            'idUsuario'=>'3',
            //'idConsultorio'=>4,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Cirugia del apendice',
            'fecha'=>'2023-06-04',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'4',
            'idEspecialidad'=>'4',
            'idDoctor'=>'5',
            'idPaciente'=>'5',
            'idAdministrativo'=>'3',
            'idUsuario'=>'5',
            //'idConsultorio'=>5,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Dolor de cabeza',
            'fecha'=>'2023-06-10',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'1',
            'idEspecialidad'=>'2',
            'idDoctor'=>'5',
            'idPaciente'=>'7',
            'idAdministrativo'=>'4',
            'idUsuario'=>'7',
            //'idConsultorio'=>6,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Cirugia de laparonoscopia',
            'fecha'=>'2023-07-08',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'9',
            'idEspecialidad'=>'4',
            'idDoctor'=>'1',
            'idPaciente'=>'8',
            'idAdministrativo'=>'5',
            'idUsuario'=>'8',
            //'idConsultorio'=>7,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Resfrio y dolor musculares',
            'fecha'=>'2023-04-09',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'10',
            'idEspecialidad'=>'2',
            'idDoctor'=>'2',
            'idPaciente'=>'9',
            'idAdministrativo'=>'9',
            'idUsuario'=>'9',
//'idConsultorio'=>8,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Fiebre alta y escalofrios',
            'fecha'=>'2023-05-02',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'8',
            'idEspecialidad'=>'2',
            'idDoctor'=>'3',
            'idPaciente'=>'10',
            'idAdministrativo'=>'3',
            'idUsuario'=>'10',
            //'idConsultorio'=>1,
        ]);

        DB::table('citas')->insert([
            'motivo'=>'Cirugia del apendice',
            'fecha'=>'2023-03-05',
            'citaConfirmada'=>'confirmada',
            'idConsulta'=>'4',
            'idEspecialidad'=>'4',
            'idDoctor'=>'5',
            'idPaciente'=>'11',
            'idAdministrativo'=>'7',
            'idUsuario'=>'11',
            //'idConsultorio'=>2,
        ]);

    }
}
