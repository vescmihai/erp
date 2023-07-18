<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TerapiaIntensiva;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use \PDF;

class TerapiaIntensivaController extends Controller
{
    public function index(Request $request)
    {   
        $usuario = User::all();
        $terapias = TerapiaIntensiva::paginate(5);
        return view('terapias.index', compact('terapias','usuario'));
    }

    public function create()
    {
        $usuario = User::all();
        return view('terapias.crear', compact('usuario'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'estado' => 'required',
            'paciente_id' => 'required|integer',
            'doctor_id' => 'required|integer',
        ]);

        $terapia = TerapiaIntensiva::create($request->all());
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('TerapiaIntensiva')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $terapia->id;
        $lastActivity->save(); 

        return redirect()->route('terapias.index', compact('usuario'));
    }

    public function edit($id)
    {
        $terapia = TerapiaIntensiva::find($id);
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('TerapiaIntensiva')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $terapia->id;
        $lastActivity->save(); 
        return view('terapias.editar', compact('terapia', 'usuario'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'estado' => 'required',
            'paciente_id' => 'required|integer',
            'doctor_id' => 'required|integer',
        ]);

        $input = $request->all();
        $terapia = TerapiaIntensiva::find($id);
        $terapia->update($input);
        return redirect()->route('terapias.index');
    }

    public function destroy($id)
    {
        $terapia = TerapiaIntensiva::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('TerapiaIntensiva')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $terapia->id;
        $lastActivity->save();
        $terapia->delete();
        return redirect()->route('terapias.index');
    }

    /*public function pdf(TerapiaIntensiva $terapias)
    {
        $terapia = TerapiaIntensiva::all();
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('TerapiaIntensiva')->log('Generó reporte')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $terapias->id;
        $lastActivity->save();
        $pdf = PDF::loadView('terapias.pdf', compact('terapias', 'terapia', 'usuario'));
        return $pdf->download('terapias'.$terapias->id.'.pdf');
    }*/
}
