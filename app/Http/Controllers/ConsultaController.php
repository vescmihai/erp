<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Doctor;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use \PDF;

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
        $doctores= Doctor::all();
        return view('consulta.crear', compact('doctores'));
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
            'idDoctor'=>'required'
        ]);

        $consulta = Consulta::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consulta')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $consulta->id;
        $lastActivity->save(); 

        return redirect()->route('consulta.index');
    }

    public function edit($id)
    { 
        $consulta = Consulta::find($id);
        $doctores = Doctor::all()->pluck('cargo', 'id');

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consulta')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $consulta->id;
        $lastActivity->save(); 
        return view('consulta.edit', compact('consulta','doctores'));
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
        $consulta = Consulta::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consulta')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $consulta->id;
        $lastActivity->save();

        $consulta->delete();
        return redirect()->route('consulta.index');
    }
    public function pdf(Consulta $consulta) 
    {
        $consultas=Consulta::all();
        $doctores=Doctor::all();


        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Consulta')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $consulta->id;
        $lastActivity->save();

        $pdf =PDF::loadView('consulta.pdf', compact('consulta','consultas','doctores'));
        return $pdf->download('consulta-'.$consulta->id.'.pdf');
    }

    public function report(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
    
        $consultas = Consulta::whereBetween('created_at', [$fromDate, $toDate])->get();
        $doctores = Doctor::all();
    
        $pdf = PDF::loadView('consulta.report', ['consultas' => $consultas, 'doctores' => $doctores]);
    
        return $pdf->download('report.pdf');
    }
    
    
}
