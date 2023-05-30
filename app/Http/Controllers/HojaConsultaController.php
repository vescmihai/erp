<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HojaConsulta;

class HojaConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hojaConsultas = HojaConsulta::paginate(5);
        return view('hojaConsultas.index', compact('hojaConsultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hojaConsultas.create');
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
            'diagnostico' => 'required',
            'indicación' => 'required',
            'proximaConsulta' => 'required',
        ]);

        $input = $request->all();

        HojaConsulta::create($input);

        return redirect()->route('hojaConsultas.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hojaConsulta = HojaConsulta::find($id);

        return view('hojaConsultas.edit', compact('hojaConsulta'));
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
            'diagnostico' => 'required',
            'indicación' => 'required',
            'proximaConsulta' => 'required',
        ]);

        $input = $request->all();

        $hojaConsulta = HojaConsulta::find($id);
        $hojaConsulta->update($input);

        return redirect()->route('hojaConsultas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HojaConsulta::find($id)->delete();
        return redirect()->route('hojaConsultas.index');
    }
}
