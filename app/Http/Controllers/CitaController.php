<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cita;
use App\Models\Consulta;
use App\Models\Especialidad;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Personal;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class CitaController extends Controller
{
    public function index(Request $request)
    {
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        $citas = Cita::paginate(5);
        return view('cita.index', compact('citas','doctores','consultas','especialidades','pacientes','personales'));
    }

    public function create()
    {
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        return view('cita.crear',compact('doctores','consultas','especialidades','pacientes','personales'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'motivo'=>'required',
            'fecha' => 'required|date',
            'citaConfirmada'=>'required',
            'idConsulta' => 'required',
            'idEspecialidad' => 'required',
            'idDoctor' => 'required',
            'idPaciente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $input = $request->all();

        Cita::create($input);

        return redirect()->route('cita.index');
    }

    public function edit($id)
    {
        $citas = Cita::find($id);
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        return view('cita.editar', compact('citas','doctores','consultas','especialidades','pacientes','personales'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'motivo'=>'required',
            'fecha' => 'required|date',
            'citaConfirmada'=>'required',
            'idConsulta' => 'required',
            'idEspecialidad' => 'required',
            'idDoctor' => 'required',
            'idPaciente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $input = $request->all();

        $cita = Cita::find($id);
        $cita->update($input);

        return redirect()->route('cita.index');
    }

    public function destroy($id)
    {
        Cita::find($id)->delete();
        return redirect()->route('cita.index');
    }
}
