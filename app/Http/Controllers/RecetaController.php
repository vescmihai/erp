<?php

namespace App\Http\Controllers;

use App\Models\HojaConsulta;
use App\Models\Receta;
use Illuminate\Http\Request;

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

        $input = $request->all();

        Receta::create($input);

        return redirect()->route('receta.index');
    }

    public function edit($id)
    {
        $hojaconsultas=HojaConsulta::all();
        $receta = Receta::find($id);
        return view('receta.edit', compact('receta','hojaconsultas'));
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
        Receta::find($id)->delete();
        return redirect()->route('receta.index');
    }
}
