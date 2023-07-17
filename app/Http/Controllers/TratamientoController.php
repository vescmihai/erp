<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Medicamento;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    public function index(Request $request)
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $medicamentos = Medicamento::all();
        $tratamientos = Tratamiento::paginate(5);
        return view('tratamiento.index', compact('tratamientos', 'medicamentos', 'doctores', 'pacientes'));
    }

    public function create()
    {
        $tratamientos = new Tratamiento();
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $medicamentos = Medicamento::all();
        return view('tratamiento.crear', compact('tratamientos', 'medicamentos', 'doctores', 'pacientes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'nombre' => 'required',
            'duracion' => 'required',
            'idPaciente' => 'required',
            'idMedicamento' => 'required',
            'idDoctor' => 'required',
        ]);

        $tratamiento = Tratamiento::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Tratamiento')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $tratamiento->id;
        $lastActivity->save();

        return redirect()->route('tratamiento.index');
    }

    public function edit($id)
    {
        $tratamiento = Tratamiento::find($id);
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $medicamentos = Medicamento::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Tratamiento')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $tratamiento->id;
        $lastActivity->save();
        return view('tratamiento.editar', compact('tratamiento',  'medicamentos', 'doctores', 'pacientes'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'nombre' => 'required',
            'duracion' => 'required',
            'idPaciente' => 'required',
            'idMedicamento' => 'required',
            'idDoctor' => 'required',
        ]);

        $input = $request->all();

        $tratamiento = Tratamiento::find($id);
        $tratamiento->update($input);

        return redirect()->route('tratamiento.index');
    }

    public function destroy($id)
    {
        $tratamiento = tratamiento::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Tratamiento')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $tratamiento->id;
        $lastActivity->save();

        $tratamiento->delete();
        return redirect()->route('tratamiento.index');
    }
}
