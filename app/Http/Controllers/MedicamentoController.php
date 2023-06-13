<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index(Request $request)
    {
        $medicamentos = Medicamento::paginate(5);
        return view('medicamento.index', compact('medicamentos'));
    }

    public function create()
    {
        return view('medicamento.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);

        $input = $request->all();

        Medicamento::create($input);

        return redirect()->route('medicamento.index');
    }

    public function edit($id)
    {
        $medicamento = Medicamento::find($id);
        return view('medicamento.editar', compact('medicamento'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);

        $input = $request->all();
        $medicamento = Medicamento::find($id);
        $medicamento->update($input);

        return redirect()->route('medicamento.index');
    }

    public function destroy($id)
    {
        Medicamento::find($id)->delete();
        return redirect()->route('medicamento.index');
    }
}
