<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservaQuirofano;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\Quirofano;
use Spatie\Activitylog\Models\Activity;

class ReservaQuirofanoController extends Controller
{
    public function index(Request $request)
    {
        $reservas = ReservaQuirofano::paginate(5);
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $quirofanos = Quirofano::all();
        return view('reservaquirofano.index', compact('reservas', 'doctores', 'pacientes', 'personales', 'quirofanos'));
    }

    public function create()
    {
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $quirofanos = Quirofano::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('reservaquirofano.crear', compact('doctores', 'pacientes', 'personales', 'quirofanos'));
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
            'idQuirofano'=> 'required|integer',
            'idPersonal'=> 'required|integer',
        ]);

        $reservas = ReservaQuirofano::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaQuirofano')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reservas->id;
        $lastActivity->save();
        return redirect()->route('reservaquirofano.index');
    }

    public function edit($id)
    {
        $reserva = ReservaQuirofano::find($id);
        $doctores = Doctor::all();
        $pacientes = Paciente::all();
        $personales = Personal::all();
        $quirofanos = Quirofano::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaQuirofano')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reserva->id;
        $lastActivity->save();
        return view('reservaquirofano.editar', compact('reserva', 'doctores', 'pacientes', 'personales', 'quirofanos'));
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
            'idQuirofano'=> 'required|integer',
            'idPersonal'=> 'required|integer',
        ]);

        $input = $request->all();
        $reserva = ReservaQuirofano::find($id);
        $reserva->update($input);
        return redirect()->route('reservaquirofano.index');
    }

    public function destroy($id)
    {
        $reserva = ReservaQuirofano::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('ReservaQuirofano')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $reserva->id;
        $lastActivity->save();

        $reserva->delete();
        return redirect()->route('reservaquirofano.index');
    }
}
