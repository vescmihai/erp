<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Receta;
use App\Models\User;
use App\Models\RecetaMedica;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\pdf;

class RecetaMedicaController extends Controller
{
    public function index(Request $request)
    {
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        $usuario=User::all();
        $recetamedicas = RecetaMedica::paginate(5);
        return view('recetamedica.index', compact('recetas', 'medicamentos', 'recetamedicas','usuario'));
    }

    public function create()
    {
        $recetamedicas = new RecetaMedica();
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        $usuario=User::all();
        return view('recetamedica.crear', compact('recetamedicas', 'recetas', 'medicamentos','usuario'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'catnidad' => 'required',
            'dosis' => 'required',
            'frecuencia' => 'required',
            'idReceta' => 'required',
            'idMedicamento' => 'required',
            'idUsuario'=>'required',
        ]);

        $recetamedica = RecetaMedica::create($request->all());
        $usuario=User::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta Medica')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $recetamedica->id;
        $lastActivity->save(); 

        return redirect()->route('recetamedica.index',compact('usuario'));
    }

    public function edit($id)
    {
        $recetamedica = RecetaMedica::find($id);
        $recetas = Receta::all();
        $usuario=User::all();
        $medicamentos = Medicamento::all();
        return view('recetamedica.editar', compact('recetamedica', 'recetas', 'medicamentos','usuario'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'catnidad' => 'required',
            'dosis' => 'required',
            'frecuencia' => 'required',
            'idReceta' => 'required',
            'idMedicamento' => 'required',
            'idUsuario'=>'required',
        ]);

        $input = $request->all();

        $Recetamedica = RecetaMedica::find($id);
        $Recetamedica->update($input);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta Medica')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $Recetamedica->id;
        $lastActivity->save(); 

        return redirect()->route('recetamedica.index');
    }

    public function destroy($id)
    {
        $recetamedica = RecetaMedica::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Receta Medica')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $recetamedica->id;
        $lastActivity->save();

        $recetamedica->delete();
        return redirect()->route('recetamedica.index');
    }

    public function pdf(RecetaMedica $recetamedicas) 
    {
        $recetas = Receta::all();
        $medicamentos = Medicamento::all();
        $recetamedica = RecetaMedica::all();
        $usuario=User::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('RecetaMedica')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $recetamedicas->id;
        $lastActivity->save();

        $pdf =PDF::loadView('recetamedica.pdf', compact('recetamedicas','recetamedica','recetas','medicamentos','usuario'));
        return $pdf->download('recetamedica-'.$recetamedicas->id.'.pdf');
    }
}
