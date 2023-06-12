<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        $doctores=Doctor::all();
        $consultas = Consulta::paginate(5);
        return view('consulta.index', compact('consultas','doctores'));
    }

    public function create()
    {
        $doctores= Doctor::all()->pluck('cargo', 'id');
        return view('consulta.crear', compact('doctores'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'idDoctor'=>'required'
        ]);

        $input = $request->all();

        Consulta::create($input);

        return redirect()->route('consulta.index');
    }

    public function edit($id)
    {
        $consulta = Consulta::find($id);
        $doctores = Doctor::all()->pluck('cargo', 'id');
        return view('consulta.editar', compact('consulta','doctores'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'idDoctor'=>'required'
        ]);

        $input = $request->all();

        $consulta = Consulta::find($id);
        $consulta->update($input);

        return redirect()->route('consulta.index');
    }

    public function destroy($id)
    {
        Consulta::find($id)->delete();
        return redirect()->route('consulta.index');
    }
}
