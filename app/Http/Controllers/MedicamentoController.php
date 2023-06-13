<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

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

        $medicamento = Medicamento::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Medicamento')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medicamento->id;
        $lastActivity->save(); 

        return redirect()->route('medicamento.index');
    }

    public function edit($id)
    {
        $medicamento = Medicamento::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Medicamento')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medicamento->id;
        $lastActivity->save(); 
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
        $medicamento = Medicamento::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Medicamento')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medicamento->id;
        $lastActivity->save();

        $medicamento->delete();
        return redirect()->route('medicamento.index');
    }
}
