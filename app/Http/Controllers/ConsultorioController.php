<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;
use App\Models\Quirofano;
use App\Models\Sala;
use Spatie\Activitylog\Models\Activity;

class ConsultorioController extends Controller
{
    public function index(Request $request)
    {
        $consultorios = Consultorio::paginate(5);
        $salas = Sala::all();
        return view('consultorio.index', compact('consultorios', 'salas'));
    }

    public function create()
    {
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('consultorio.crear', compact('salas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'idSala' => 'required|integer',
        ]);

        $consultorios = Consultorio::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consultorio')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $consultorios->id;
        $lastActivity->save();
        return redirect()->route('consultorio.index');
    }

    public function edit($id)
    {
        $consultorio = Consultorio::find($id);
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consultorio')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $consultorio->id;
        $lastActivity->save();
        return view('consultorio.editar', compact('consultorio', 'salas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'idSala' => 'required|integer',
        ]);

        $input = $request->all();
        $consultorio = Consultorio::find($id);
        $consultorio->update($input);
        return redirect()->route('consultorio.index');
    }

    public function destroy($id)
    {
        $consultorio = Consultorio::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consultorio')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $consultorio->id;
        $lastActivity->save();

        $consultorio->delete();
        return redirect()->route('consultorio.index');
    }
}
