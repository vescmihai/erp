<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quirofano;
use App\Models\Sala;
use Spatie\Activitylog\Models\Activity;

class QuirofanoController extends Controller
{
    public function index(Request $request)
    {
        $quirofanos = Quirofano::paginate(5);
        $salas = Sala::all();
        return view('quirofano.index', compact('quirofanos', 'salas'));
    }

    public function create()
    {
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('quirofano.crear', compact('salas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'idSala' => 'required|integer',
        ]);

        $quirofanos = Quirofano::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Quirofano')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $quirofanos->id;
        $lastActivity->save();
        return redirect()->route('quirofano.index');
    }

    public function edit($id)
    {
        $quirofano = Quirofano::find($id);
        $salas = Sala::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Quirofano')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $quirofano->id;
        $lastActivity->save();
        return view('quirofano.editar', compact('quirofano', 'salas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'idSala' => 'required|integer',
        ]);

        $input = $request->all();
        $quirofano = Quirofano::find($id);
        $quirofano->update($input);
        return redirect()->route('quirofano.index');
    }

    public function destroy($id)
    {
        $quirofano = Quirofano::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Quirofano')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $quirofano->id;
        $lastActivity->save();

        $quirofano->delete();
        return redirect()->route('quirofano.index');
    }
}
