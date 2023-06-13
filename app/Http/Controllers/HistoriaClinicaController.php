<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HistoriaClinica;
use App\Models\Expediente;
use App\Models\Personal;
use Spatie\Activitylog\Models\Activity;

class HistoriaClinicaController extends Controller
{
    public function index(Request $request)
    {
        $expedientes=Expediente::all();
        $personales=Personal::all();
        $historiasClinicas = HistoriaClinica::paginate(5);
        return view('historiaclinica.index', compact('historiasClinicas', 'expedientes', 'personales'));
    }

    public function create()
    {
        $expedientes=Expediente::all();
        $personales=Personal::all();
        return view('historiaclinica.create', compact('expedientes', 'personales'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'enfermedad'=>'required',
            'manifestaciones' => 'required',
            'fechaRegistro'=>'required|date',
            'estadoPaciente' => 'required',
            'idExpediente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $historiaClinica = HistoriaClinica::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('HistoriaClinica')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $historiaClinica->id;
        $lastActivity->save(); 

        return redirect()->route('historiaclinica.index');
    }

    public function edit($id)
    {
        $historiaClinica = HistoriaClinica::find($id);
        $expedientes=Expediente::all();
        $personales=Personal::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('HistoriaClinica')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $historiaClinica->id;
        $lastActivity->save(); 
        return view('historiaclinica.edit', compact('historiaClinica','expedientes','personales'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'enfermedad'=>'required',
            'manifestaciones' => 'required',
            'fechaRegistro'=>'required|date',
            'estadoPaciente' => 'required',
            'idExpediente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $input = $request->all();

        $historiaClinica = HistoriaClinica::find($id);
        $historiaClinica->update($input);

        return redirect()->route('historiaclinica.index');
    }

    public function destroy($id)
    {
        $historiaClinica = HistoriaClinica::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('HistoriaClinica')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $historiaClinica->id;
        $lastActivity->save();

        $historiaClinica->delete();
        return redirect()->route('historiaclinica.index');
    }
}
