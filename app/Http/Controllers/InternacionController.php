<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internacion;
use App\Models\Sala;
use Spatie\Activitylog\Models\Activity;

class InternacionController extends Controller
{
    public function index(Request $request)
    {
        $internaciones = Internacion::paginate(5);
        $salas = Sala::all();
        return view('internacion.index', compact('internaciones','salas'));
    }

    public function create()
    {
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('internacion.crear', compact('salas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipoInternacion' => 'required',
            'idSala' => 'required|integer',
        ]);

        $internacion = Internacion::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Internacion')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $internacion->id;
        $lastActivity->save(); 
        return redirect()->route('internacion.index');
    }

    public function edit($id)
    {
        $internacion = Internacion::find($id);
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Internacion')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $internacion->id;
        $lastActivity->save(); 
        return view('internacion.editar', compact('internacion', 'salas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tipoInternacion' => 'required',
            'idSala' => 'required|integer',
        ]);

        $input = $request->all();
        $internacion = Internacion::find($id);
        $internacion->update($input);
        return redirect()->route('internacion.index');
    }

    public function destroy($id)
    {
        $internacion = Internacion::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Internacion')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $internacion->id;
        $lastActivity->save();

        $internacion->delete();
        return redirect()->route('internacion.index');
    }
}
