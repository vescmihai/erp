<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function index(Request $request)
    {
        $horarios = Horarios::paginate(7);
        return view('horarios.index', compact('horarios'));
    }

    public function create() 
    {
        return view('horarios.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Dia' => 'required',
            'mañana' => 'required',
            'tarde' => 'required',
            'noche'=>'required',
        ]);

        $input = $request->all();

        Horarios::create($input);

        return redirect()->route('horarios.index');
    }

    public function edit($id)
    {
        $horarios = Horarios::find($id);

        return view('horarios.editar', compact('horarios'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Dia' => 'required',
            'mañana' => 'required',
         
        ]);

        $input = $request->all();

        $horarios = Horarios::find($id);
        $horarios->update($input);

        return redirect()->route('horarios.index');
    }

    public function destroy($id)
    {
        Horarios::find($id)->delete();
        return redirect()->route('horarios.index');
    }
}
