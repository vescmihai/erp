<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Receta;
use App\Models\RecetaMedica;
use Illuminate\Http\Request;

class RecetaMedicaController extends Controller
{
    public function index(Request $request)
    {
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        $recetamedicas = RecetaMedica::paginate(5);
        return view('recetamedica.index', compact('recetas', 'medicamentos', 'recetamedicas'));
    }

    public function create()
    {
        $recetamedicas = new RecetaMedica();
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        return view('recetamedica.crear', compact('recetamedicas', 'recetas', 'medicamentos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'catnidad' => 'required',
            'dosis' => 'required',
            'frecuencia' => 'required',
            'idReceta' => 'required',
            'idMedicamento' => 'required',
        ]);

        $input = $request->all();

        RecetaMedica::create($input);

        return redirect()->route('recetamedica.index');
    }

    public function edit($id)
    {
        $recetamedica = RecetaMedica::find($id);
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        return view('recetamedica.editar', compact('recetamedica', 'recetas', 'medicamentos'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'catnidad' => 'required',
            'dosis' => 'required',
            'frecuencia' => 'required',
            'idReceta' => 'required',
            'idMedicamento' => 'required',
        ]);

        $input = $request->all();

        $Recetamedica = RecetaMedica::find($id);
        $Recetamedica->update($input);

        return redirect()->route('recetamedica.index');
    }

    public function destroy($id)
    {
        RecetaMedica::find($id)->delete();
        return redirect()->route('recetamedica.index');
    }
}
