<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Sector;
use Spatie\Activitylog\Models\Activity;

class SalaController extends Controller
{
    public function index(Request $request)
    {
        $salas = Sala::paginate(5);
        $sectores = Sector::all();
        return view('salas.index', compact('salas','sectores'));
    }

    public function create()
    {
        $salas = new Sala();
        $sectores = Sector::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('salas.crear', compact('salas','sectores'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nroSala' => 'required',
            'capacidad' => 'required|integer',
            'tipo' => 'required',
            'idSector' => 'required',
        ]);

      

        
        $sala = Sala::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Sala')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sala->id;
        $lastActivity->save(); 
        return redirect()->route('salas.index');
    }

    public function edit($id)
    {
        $sala = Sala::find($id);
        $sectores = Sector::all(); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('salas.editar', compact('sala', 'sectores'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nroSala' => 'required',
            'capacidad' => 'required|integer',
            'tipo' => 'required',
            'idSector' => 'required',
        ]);

        $input = $request->all();
        $sala = Sala::find($id);
        $sala->update($input);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Salas')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sala->id;
        $lastActivity->save(); 
        return redirect()->route('salas.index');
    }

    public function destroy($id)
    {
        $sala = Sala::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Salas')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sala->id;
        $lastActivity->save();

        $sala->delete();
        return redirect()->route('salas.index');
    }
}
