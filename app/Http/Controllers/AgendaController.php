<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Cita;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $citas = Cita::all();
        $doctores = Doctor::all();
        $agendas = Agenda::paginate(5);
        return view('agenda.index', compact('agendas', 'doctores', 'citas'));
    }

    public function create()
    {
        $agendas = new Agenda();
        $citas = Cita::all();
        $doctores = Doctor::all();
        return view('agenda.crear', compact('agendas', 'doctores', 'citas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fecha' => 'required|date',
            'idDoctor' => 'required',
            'idCita' => 'required',
        ]);

        $input = $request->all();

        Agenda::create($input);

        return redirect()->route('agenda.index');
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);
        $citas = Cita::all();
        $doctores = Doctor::all();
        return view('agenda.editar', compact('agenda', 'doctores', 'citas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fecha' => 'required|date',
            'idDoctor' => 'required',
            'idCita' => 'required',
        ]);

        $input = $request->all();

        $Agenda = Agenda::find($id);
        $Agenda->update($input);

        return redirect()->route('agenda.index');
    }

    public function destroy($id)
    {
        Agenda::find($id)->delete();
        return redirect()->route('agenda.index');
    }
}
