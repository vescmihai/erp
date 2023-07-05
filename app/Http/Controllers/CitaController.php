<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cita;
use App\Models\Consulta;
use App\Models\Especialidad;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\pdf;

class CitaController extends Controller
{
    public function index(Request $request)
    {
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        $usuario=User::all();
        $citas = Cita::paginate(5);
        return view('cita.index', compact('citas','doctores','consultas','especialidades','pacientes','personales','usuario'));
    }

    public function create()
    {
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        $usuario=User::all();
        return view('cita.crear',compact('doctores','consultas','especialidades','pacientes','personales','usuario'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'motivo'=>'required',
            'fecha' => 'required|date',
            'citaConfirmada'=>'required',
            'idConsulta' => 'required',
            'idEspecialidad' => 'required',
            'idDoctor' => 'required',
            'idPaciente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $cita = Cita::create($request->all());
        $usuario=User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Cita')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $cita->id;
        $lastActivity->save(); 

        return redirect()->route('cita.index',compact('usuario'));
    }

    public function edit($id)
    {
        $citas = Cita::find($id);
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        $usuario=User::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Cita')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $citas->id;
        $lastActivity->save(); 
        return view('cita.edit', compact('citas','doctores','consultas','especialidades','pacientes','personales','usuario'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'motivo'=>'required',
            'fecha' => 'required|date',
            'citaConfirmada'=>'required',
            'idConsulta' => 'required',
            'idEspecialidad' => 'required',
            'idDoctor' => 'required',
            'idPaciente' => 'required',
            'idAdministrativo' => 'required',
        ]);

        $input = $request->all();

        $cita = Cita::find($id);
        $cita->update($input);

        return redirect()->route('cita.index');
    }

    public function destroy($id)
    {
        $cita = Cita::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Cita')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $cita->id;
        $lastActivity->save();

        $cita->delete();
        return redirect()->route('cita.index');
    }

    public function pdf(Cita $citas) 
    {
        $consultas=Consulta::all();
        $especialidades=Especialidad::all();
        $pacientes=Paciente::all();
        $personales=Personal::all();
        $doctores=Doctor::all();
        $usuario=User::all();
        $cita = Cita::where('id', $citas->id)->get();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('cita')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $citas->id;
        $lastActivity->save();

        $pdf =PDF::loadView('cita.pdf', compact('citas','cita','doctores','consultas','especialidades','pacientes','personales','usuario'));
        return $pdf->download('cita-'.$citas->id.'.pdf');
    }
}
