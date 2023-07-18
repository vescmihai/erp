<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tratamiento::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'descripcion' => 'required',
            'nombre' => 'required',
            'duracion' => 'required',
            'idPaciente' => 'required',
            'idMedicamento' => 'required',
            'idDoctor' => 'required',
        ]);
        $tratamiento = Tratamiento::create($request->all());
        $tratamiento->save();
        return $tratamiento;
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
        $tratamiento = Tratamiento::where('idDoctor', $id)->get();
        $tratamiento->load('paciente','medicamento', 'doctores');
        return $tratamiento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        // "descripcion": "Tomar medicamento cada 8h",
        // "nombre": "Tos Grave",
        // "duracion": "1 mes",
        // "idPaciente": 6,
        // "idMedicamento": 1,
        // "idDoctor": 1
        $tratamiento = Tratamiento::find($id);
        if (!$tratamiento) {
            return $data = [
                'mensaje' => 'cita no encontrada',
                'status' => 404,
            ];
        } else {
            $this->validate($request, [
                'descripcion' => 'required',
            'nombre' => 'required',
            'duracion' => 'required',
            'idPaciente' => 'required',
            'idMedicamento' => 'required',
            'idDoctor' => 'required',
            ]);

            $tratamiento->fill($request->all());
            $tratamiento->save();
            return $tratamiento;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tratamiento = Tratamiento::find($id);
        if (!$tratamiento) {
            return $data = [
                'mensaje' => 'no se encontro la receta a eliminar',
                'status' => 404
            ];
        } else {
            $tratamiento->delete();
            return $data = [
                'mensaje' => 'se elimino con exito',
                'status' => 200
            ];
        }
    }
}
