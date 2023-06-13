<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Spatie\Activitylog\Models\Activity;

class TurnoController extends Controller
{
    public function index(Request $request)
    {
        $turnos = Turno::paginate(5);
        return view('turno.index', compact('turnos'));
    }

    public function create() 
    {
        return view('turno.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'horaInicio' => 'required|date_format:H:i',
            'horaFin' => 'required|date_format:H:i',
        ]);


        $turno = Turno::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Turnos')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $turno->id;
        $lastActivity->save(); 

        return redirect()->route('turno.index');
    }

    public function edit($id)
    {
        $turno = Turno::find($id);

        return view('turno.editar', compact('turno'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'horaInicio' => 'required|date_format:H:i',
            'horaFin' => 'required|date_format:H:i',
        ]);

        $input = $request->all();

        $turno = Turno::find($id);
        $turno->update($input);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Turnos')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $turno->id;
        $lastActivity->save(); 

        return redirect()->route('turno.index');
    }

    public function destroy($id)
    {

        $turno = Turno::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Turnos')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $turno->id;
        $lastActivity->save();

        $turno->delete();
        return redirect()->route('turno.index');
    }
}
