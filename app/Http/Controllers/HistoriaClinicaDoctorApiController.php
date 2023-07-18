<?php

namespace App\Http\Controllers;

use App\Models\HistoriaClinica;
use Illuminate\Http\Request;

class HistoriaClinicaDoctorApiController extends Controller
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
            // "enfermedad": "Gripe",
            // "manifestaciones": "Fiebre,tos,dolor de garganta",
            // "fechaRegistro": "2023-06-14",
            // "estadoPaciente": "Estable",
            // "idExpediente": 1,
            // "idAdministrativo": 1,
            // "idUsuario": 6,
            // "idDoctor": 1
            'enfermedad' => 'required|string',
            'manifestaciones' => 'required|string',
            'fechaRegistro' => 'required|date',
            'estadoPaciente' => 'required|string',
            'idExpediente' => 'required|integer',
            'idAdministrativo' => 'required|integer',
            'idUsuario' => 'required|integer',
            'idDoctor' => 'required|integer',
        ]);

        $historioClinica = HistoriaClinica::create($request->all());
        $historioClinica->save();
        return $historioClinica;
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
        $historiaClinica = HistoriaClinica::where('idDoctor', $id)->get();
        $historiaClinica->load('usuario', 'doctor');
        return $historiaClinica;
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
        $historioClinica = HistoriaClinica::find($id);
        if (!$historioClinica) {
            return $data = [
                'mensaje' => 'cita no encontrada',
                'status' => 404,
            ];
        } else {
            $this->validate($request, [
                'enfermedad' => 'required|string',
                'manifestaciones' => 'required|string',
                'fechaRegistro' => 'required|date',
                'estadoPaciente' => 'required|string',
                'idExpediente' => 'required|integer',
                'idAdministrativo' => 'required|integer',
                'idUsuario' => 'required|integer',
                'idDoctor' => 'required|integer',
            ]);

            $historioClinica->fill($request->all());
            $historioClinica->save();
            return $historioClinica;
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
    }
}
