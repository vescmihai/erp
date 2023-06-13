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

        $input = $request->all();
        Sala::create($input);
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
        return redirect()->route('salas.index');
    }

    public function destroy($id)
    {
        Sala::find($id)->delete();
        return redirect()->route('salas.index');
    }
}
