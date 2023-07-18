<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(SeederTablaPermisos::class);
        $this->call(UserSeeder::class);
        $this->call(PacientesSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(EspecialidadesSeeder::class);
        $this->call(SectoresSeeder::class);
        $this->call(SalasSeeder::class);
        $this->call(DoctoresSeeder::class);
        $this->call(ConsultaSeeder::class);

        $this->call(CitaSeeder::class);
        $this->call(TurnoSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(ExpedienteSeeder::class);
        $this->call(HojaConsultaSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(MedicamentosSeeder::class);
        $this->call(RecetasSeeder::class);
        $this->call(RecetaMedicaSeeder::class);
        $this->call(HistorialClinicoSeeder::class);
        $this->call(InternacionSeeder::class);
        $this->call(ConsultorioSeeder::class);
        $this->call(CitaForeingKeySeeder::class);


    }
}
