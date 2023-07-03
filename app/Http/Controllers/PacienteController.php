<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\pdf;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $usuario = User::all();
        $pacientes = Paciente::paginate(5);
        return view('pacientes.index', compact('pacientes','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = User::all();
        return view('pacientes.crear',compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tutor' => 'required',
            'nroTutor' => 'required|integer',
            'idUser'=> 'required',
        ]);

        $paciente = Paciente::create($request->all());
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Paciente')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $paciente->id;
        $lastActivity->save(); 

        return redirect()->route('pacientes.index',compact('usuario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Paciente')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $paciente->id;
        $lastActivity->save(); 
        return view('pacientes.editar', compact('paciente','usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tutor' => 'required',
            'nroTutor' => 'required|integer',
            'idUser'=>'required',
        ]);

        $input = $request->all();

        $paciente = Paciente::find($id);
        $paciente->update($input);

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Paciente')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $paciente->id;
        $lastActivity->save();

        $paciente->delete();
        return redirect()->route('pacientes.index');
    }

    public function pdf(Paciente $pacientes) 
    {

        $paciente = Paciente::all();
        $usuario = User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Paciente')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $pacientes->id;
        $lastActivity->save();

        $pdf =PDF::loadView('pacientes.pdf', compact('pacientes','paciente','usuario'));
        return $pdf->download('pacientes'.$pacientes->id.'.pdf');
    }
}
