<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Consulta::all();
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
        $this->validate($request,[
            'descripcion'=>'required',
            'idDoctor'=>'required',
        ]);
        $consulta=Consulta::create($request->all());
        $consulta->save();
        return $consulta;


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
        $consulta=Consulta::find($id);
        return $consulta;
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
        $consulta=Consulta::find($id);
        if(!$consulta){
            return $respuesta=[
                'mensaje'=>'no se encontro la consulta para actualizar',
                'status'=>404
            ];
        }else{
           $this->validate($request,[
            'descripcion'=>'required',
            'idDoctor'=>'required'
           ]);

           $consulta->fill($request->all());
           $consulta->save();
           return $consulta;
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
        $consulta=Consulta::find($id);
        if(!$consulta){
            return $respuesta=[
            'mensaje'=>'no se encontro la consulta para eliminar',
            'status'=>404];
        }else{
            $consulta->delete();
            return $respuesta=[
                'mensaje'=>'se elimino con exito',
                'status'=>200];
        }
    }
}
