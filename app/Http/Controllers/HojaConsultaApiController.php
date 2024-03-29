<?php

namespace App\Http\Controllers;

use App\Models\HojaConsulta;
use Illuminate\Http\Request;

class HojaConsultaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return HojaConsulta::all();
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
        // "id": 1,
        // "diagnostico": "paciente delicado",
        // "indicación": "permanecer en reposo",
        // "proximaConsulta": "la proxima semana",
        // "idDoctor": 1,
        // "idUsuario": 6,
        // "created_at": null,
        // "updated_at": null,
        $this->validate($request, [
            'diagnostico' => 'required',
            'indicación' => 'required',
            'proximaConsulta' => 'required',
            'idDoctor' => 'required',
            'idUsuario' => 'required',
        ]);
        $hojaConsulta = HojaConsulta::create($request->all());
        $hojaConsulta->save();
        return $hojaConsulta;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $hojaConsult = HojaConsulta::where('idDoctor', $id)->get();
        $hojaConsult->load('doctor', 'usuario');
        return $hojaConsult;
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
        $hojaConsulta = HojaConsulta::find($id);
        if (!$hojaConsulta) {
            return $data = [
                'mensaje' => 'cita no encontrada',
                'status' => 404,
            ];
        } else {
            $this->validate($request, [
                'diagnostico' => 'required',
                'indicación' => 'required',
                'proximaConsulta' => 'required',
                'idDoctor' => 'required',
                'idUsuario' => 'required',
            ]);

            $hojaConsulta->fill($request->all());
            $hojaConsulta->save();
            return $hojaConsulta;
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
        $hojaConsulta = HojaConsulta::find($id);
        if (!$hojaConsulta) {
            return $data = [
                'mensaje' => 'no se encontro la receta a eliminar',
                'status' => 404
            ];
        } else {
            $hojaConsulta->delete();
            return $data = [
                'mensaje' => 'se elimino con exito',
                'status' => 200
            ];
        }
    }
}
