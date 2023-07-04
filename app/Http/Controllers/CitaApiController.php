<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Consulta;
use Facade\FlareClient\Http\Client;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class citaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    // {
    //     $this->middleware('auth:sanctum')->except('index');
    // }

    public function index()
    {
        // if (auth()->check()) {
        //     return Cita::all();
        // } else {
        //     return response()->json(['mensaje' => 'No autorizado, citas', 'status' => 401]);
        // }

        //return Cita::all();
        return Cita::with('consulta', 'especialidad', 'doctores', 'paciente', 'personal', 'usuario')->get();
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
            'motivo'=>'required',
            'fecha' => 'required|date',
            'citaConfirmada'=>'required',
            'idConsulta' => 'required',
            'idEspecialidad' => 'required',
            //'idDoctor' => 'required',
            //'idPaciente' => 'required',
            //'idAdministrativo' => 'required',
            'idUsuario'=>'required'
        ]);

        $cita = Cita::create($request->all());
        $cita->save();
        // return response()->json([
        //     "cita"=>$cita,
        // "consulta"=>\App\Models\Consulta::find($request->idConsulta)]);

        $idCita = $cita->id;
        $motivo = $request->motivo;
        $fecha = $request->fecha;
        $citaConfirmada = $request->citaConfirmada;
        $consulta = Consulta::find($request->idConsulta);
        $especialidad = \App\Models\Especialidad::find($request->idEspecialidad);
        $doctor = \App\Models\Doctor::find($request->idDoctor);
        $paciente = \App\Models\Paciente::find($request->idPaciente);
        /* $administrativo = \App\Models\Personal::find($request->idAdministrativo); */
        $usuario = \App\Models\User::find($request->idUsuario);

        $data = [
            'id' => $idCita,
            'motivo' => $motivo,
            'fecha' => $fecha,
            'citaConfirmada' => $citaConfirmada,
            'consulta' => $consulta,
            'especialidad' => $especialidad,
            'doctor' => $doctor,
            'paciente' => $paciente,
            /* 'administrativo' => $administrativo, */
            'usuario' => $usuario,
        ];
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita=Cita::find($id);
        if(!$cita){
            return $data=[
                'mensaje'=>'error, no se encontro la cita',
                'status'=> 404];
        }else{return $cita;}

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
        $cita=Cita::find($id);
        if(!$cita){
            return $data=[
                'mensaje'=>'cita no encontrada',
                'status' =>404,
            ];
        }else{
            $this->validate($request, [
                'motivo'=>'required',
                'fecha' => 'required|date',
                'citaConfirmada'=>'required',
                'idConsulta' => 'required',
                'idEspecialidad' => 'required',
                //'idDoctor' => 'required',
                //'idPaciente' => 'required',
                'idAdministrativo' => 'required',
            ]);

            $cita->fill($request->all());
            $cita->save();
            return $cita;
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
        $cita=Cita::find($id);
        if(!$cita){
            return $data=[
                'mensaje'=>'no se encontro la cita a eliminar',
                'status'=>404
            ];
        }else{
            $cita->delete();
            return $data=[
                'mensaje'=>'se elimino con exito',
                'status'=>200
            ];
        }

    }
}
