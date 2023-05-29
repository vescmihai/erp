<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Sector;

class SalaController extends Controller
{
    public function index(Request $request)
    {
        $salas = Sala::paginate(5);
        return view('salas.index', compact('salas'));
    }

    public function create()
    {
        $sectores = Sector::all()->pluck('descripcion', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('salas.crear', compact('sectores'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nroSala' => 'required',
            'capacidad' => 'required|integer',
            'tipo' => 'required',
            'idSector' => 'required|integer',
        ]);

        $input = $request->all();
        Sala::create($input);
        return redirect()->route('salas.index');
    }

    public function edit($id)
    {
        $sala = Sala::find($id);
        $sectores = Sector::all()->pluck('nombre', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Sectores
        return view('salas.edit', compact('sala', 'sectores'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nroSala' => 'required',
            'capacidad' => 'required|integer',
            'tipo' => 'required',
            'idSector' => 'required|integer',
        ]);

        $input = $request->all();
        $sala = Sala::find($id);
        $sala->update($input);
        return redirect()->route('salas.index');
    }

    public function destroy($id)
    {
        Sala::find($id)->delete();
        return redirect()->route('salas.index');
    }
}
