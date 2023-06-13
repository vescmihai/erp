<?php

namespace App\Http\Controllers;

use App\Models\HojaConsulta;
use App\Models\Receta;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class RecetaController extends Controller
{
    public function index(Request $request)
    {
        $hojaconsultas=HojaConsulta::all();
        $recetas = Receta::paginate(5);
        return view('receta.index', compact('recetas','hojaconsultas'));
    }

    public function create()
    {
        $hojaconsultas=HojaConsulta::all();
        return view('receta.crear', compact('hojaconsultas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'idHojadeConsulta' => 'required',
        ]);

        $receta = Receta::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $receta->id;
        $lastActivity->save(); 

        return redirect()->route('receta.index');
    }

    public function edit($id)
    {
        $hojaconsultas=HojaConsulta::all();
        $receta = Receta::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $receta->id;
        $lastActivity->save(); 
        return view('receta.editar', compact('receta','hojaconsultas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'idHojadeConsulta' => 'required',
        ]);

        $input = $request->all();
        $receta = Receta::find($id);
        $receta->update($input);

        return redirect()->route('receta.index');
    }

    public function destroy($id)
    {
        $receta = Receta::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $receta->id;
        $lastActivity->save();

        $receta->delete();
        return redirect()->route('receta.index');
    }
}
