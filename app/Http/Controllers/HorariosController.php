<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

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

        $horarios = Horarios::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Horarios')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $horarios->id;
        $lastActivity->save(); 

        return redirect()->route('horarios.index');
    }

    public function edit($id)
    {
        $horarios = Horarios::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Horarios')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $horarios->id;
        $lastActivity->save(); 
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
        $horarios = Horarios::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Horarios')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $horarios->id;
        $lastActivity->save();

        $horarios->delete();
        return redirect()->route('horarios.index');
    }
}
