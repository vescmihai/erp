<?php

namespace App\Http\Controllers;

use App\Models\RecetaMedica;
use Illuminate\Http\Request;

class RecetaMedicaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return RecetaMedica::all();
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
            'catnidad'=>'required',
            'dosis'=>'required',
            'frecuencia'=>'required',
            'idReceta'=>'required',
            'idMedicamento'=>'required',
        ]);
        $recetaMedica=RecetaMedica::create($request->all());
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
        $recetaMedic=RecetaMedica::find($id);
        return $recetaMedic;
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
        $recetaMedica=RecetaMedica::find($id);
        if(!$recetaMedica){
            return $data=[
                'mensaje'=>'no se encontro la receta medica a eliminar',
                'status'=>404
            ];
        }else{
            $this->validate($request,[
                'catnidad'=>'required',
                'dosis'=>'required',
                'frecuencia'=>'required',
                'idReceta'=>'required',
                'idMedicamento'=>'required',
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
        $recetaMedica=RecetaMedica::find($id);
        if(!$recetaMedica){
            return $respuesta=[
                'mensaje'=>'no se encontro la respuesta a eliminar',
                'status'=>404
            ];
        }else{
            $recetaMedica->delete();
        }
    }
}
