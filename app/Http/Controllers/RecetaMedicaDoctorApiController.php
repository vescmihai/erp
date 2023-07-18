<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\RecetaMedica;
use Illuminate\Http\Request;

class RecetaMedicaDoctorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'catnidad' => 'required|integer',
            'dosis' => 'required|string',
            'frecuencia' => 'required|string',
            'idReceta' => 'required|integer',
            'idMedicamento' => 'required|integer',
            'idUsuario' => 'required|integer',
            'idDoctor' => 'required|integer',
        ]);

        $recetaMedica = RecetaMedica::create($request->all());
        $recetaMedica->save();
        return $recetaMedica;
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
        $recetaMedica = RecetaMedica::where('idDoctor', $id)->get();
        $recetaMedica->load('medicamento', 'usuario');

        foreach ($recetaMedica as $recetaMedic) {
            $idReceta = $recetaMedic->idReceta;
            $receta = Receta::where('id', $idReceta)->get();
            $recetaMedic->receta = $receta->load('hojaConsulta');
        }
        return $recetaMedica;
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
        $recetaMedica = RecetaMedica::find($id);
        if (!$recetaMedica) {
            return $data = [
                'mensaje' => 'cita no encontrada',
                'status' => 404,
            ];
        } else {
            $this->validate($request, [
                'catnidad' => 'required|integer',
                'dosis' => 'required|string',
                'frecuencia' => 'required|string',
                'idReceta' => 'required|integer',
                'idMedicamento' => 'required|integer',
                'idUsuario' => 'required|integer',
                'idDoctor' => 'required|integer',
            ]);

            $recetaMedica->fill($request->all());
            $recetaMedica->save();
            return $recetaMedica;
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
        //
        $recetaMedica = RecetaMedica::find($id);
        if (!$recetaMedica) {
            return $data = [
                'mensaje' => 'no se encontro la receta a eliminar',
                'status' => 404
            ];
        } else {
            $recetaMedica->delete();
            return $data = [
                'mensaje' => 'se elimino con exito',
                'status' => 200
            ];
        }
    }
}
