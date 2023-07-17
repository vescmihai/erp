<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaDeEmergencia;
use App\Models\User;
use App\Models\Sector;
use Spatie\Activitylog\Models\Activity;
use \PDF;

class SalaDeEmergenciaController extends Controller
{
    public function index(Request $request)
    {   
        $usuario = User::all();
        $salasEmergencia = SalaDeEmergencia::paginate(12);
        return view('salasEmergencia.index', compact('salasEmergencia','usuario'));
    }

    public function create()
    {
        $usuario = User::all();
        $sectores = Sector::pluck('descripcion', 'id');
        return view('salasEmergencia.crear',compact('usuario', 'sectores'));
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'sector_id' => 'required',
            'capacidad' => 'required|integer',
            'camasDisponibles' => 'required|integer',
            'estado' => 'required',
        ]);

        $salaEmergencia = SalaDeEmergencia::create($request->all());
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('SalaDeEmergencia')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $salaEmergencia->id;
        $lastActivity->save(); 

        return redirect()->route('salasEmergencia.index',compact('usuario'));
    }

    public function edit($id)
    {
        $salaEmergencia = SalaDeEmergencia::find($id);
        $usuario = User::all();
        $sectores = Sector::pluck('descripcion', 'id');
        return view('salasEmergencia.editar', compact('salaEmergencia', 'usuario', 'sectores'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $salaEmergencia = SalaDeEmergencia::find($id);
        $salaEmergencia->update($input);

        return redirect()->route('salasEmergencia.index');
    }


    public function pdf(SalaDeEmergencia $salasEmergencia) 
    {
        $salaEmergencia = SalaDeEmergencia::all();
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('SalaDeEmergencia')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $salasEmergencia->id;
        $lastActivity->save();

        $pdf =PDF::loadView('salasEmergencia.pdf', compact('salasEmergencia','salaEmergencia','usuario'));
        return $pdf->download('salasEmergencia'.$salasEmergencia->id.'.pdf');
    }
}
