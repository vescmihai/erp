<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservaConsultorio;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\Consultorio;
use Spatie\Activitylog\Models\Activity;

class ReservaConsultorioController extends Controller
{
    public function index(Request $request)
    {
        $reservas = ReservaConsultorio::paginate(5);
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $consultorios = Consultorio::all();
        return view('reservaconsultorio.index', compact('reservas', 'doctores', 'pacientes', 'personales', 'consultorios'));
    }

    public function create()
    {
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $consultorios = Consultorio::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('reservaconsultorio.crear', compact('doctores', 'pacientes', 'personales', 'consultorio'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fechaHora' => 'required',
            'cantidadHoras'=> 'required',
            'tipoIntervencion'=> 'required',
            'procedimiento'=> 'required',
            'idDoctor' => 'required|integer',
            'idPaciente'=> 'required|integer',
            'idConsultorio'=> 'required|integer',
            'idPersonal'=> 'required|integer',
        ]);

        $reservas = ReservaConsultorio::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaConsultorio')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reservas->id;
        $lastActivity->save();
        return redirect()->route('reservaconsultorio.index');
    }

    public function edit($id)
    {
        $reserva = ReservaConsultorio::find($id);
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $consultorios = Consultorio::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaConsultorio')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reserva->id;
        $lastActivity->save();
        return view('reservaconsultorio.editar', compact('reserva', 'doctores', 'pacientes', 'personales', 'consultorios'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fechaHora' => 'required',
            'cantidadHoras'=> 'required',
            'tipoIntervencion'=> 'required',
            'procedimiento'=> 'required',
            'idDoctor' => 'required|integer',
            'idPaciente'=> 'required|integer',
            'idConsultorio'=> 'required|integer',
            'idPersonal'=> 'required|integer',
        ]);

        $input = $request->all();
        $reserva = ReservaConsultorio::find($id);
        $reserva->update($input);
        return redirect()->route('reservaconsultorio.index');
    }

    public function destroy($id)
    {
        $reserva = ReservaConsultorio::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaConsultorio')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reserva->id;
        $lastActivity->save();

        $reserva->delete();
        return redirect()->route('reservaconsultorio.index');
    }
}
