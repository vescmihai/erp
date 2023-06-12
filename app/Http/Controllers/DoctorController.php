<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Especialidad;
use App\Models\Sala;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctores = Doctor::paginate(5);
        return view('doctors.index', compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidad::all()->pluck('nombre', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Especialidades
        $salas = Sala::all()->pluck('nroSala', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Salas
    
        return view('doctors.crear', compact('especialidades', 'salas'));
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
            'formacion' => 'required',
            'cargo' => 'required',
            'idEspecialidad' => 'required|integer',
            'idSala' => 'required|integer',
        ]);

        $input = $request->all();

        Doctor::create($input);

        return redirect()->route('doctors.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $especialidades = Especialidad::all()->pluck('nombre', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Especialidades
        $salas = Sala::all()->pluck('nroSala', 'id'); // Asegúrate de que 'nombre' y 'id' sean columnas válidas en tu tabla de Salas
    
        return view('doctors.edit', compact('doctor', 'especialidades', 'salas'));
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
            'formacion' => 'required',
            'cargo' => 'required',
            'idEspecialidad' => 'required|integer',
            'idSala' => 'required|integer',
        ]);

        $input = $request->all();

        $doctor = Doctor::find($id);
        $doctor->update($input);

        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctors.index');
    }
}
