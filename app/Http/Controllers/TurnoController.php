<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

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

        $input = $request->all();

        Turno::create($input);

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

        return redirect()->route('turno.index');
    }

    public function destroy($id)
    {
        Turno::find($id)->delete();
        return redirect()->route('turno.index');
    }
}
