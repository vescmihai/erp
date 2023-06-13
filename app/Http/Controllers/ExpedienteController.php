<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use Spatie\Activitylog\Models\Activity;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $expedientes = Expediente::paginate(5);
        return view('expedientes.index', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expedientes.crear');
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
            'codigoRegistro' => 'required',
            'fechaRegistro' => 'required',
        ]);

        $expediente = Expediente::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Expediente')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $expediente->id;
        $lastActivity->save(); 

        return redirect()->route('expedientes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente = Expediente::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Expediente')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $expediente->id;
        $lastActivity->save(); 
        return view('expedientes.edit', compact('expediente'));
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
            'codigoRegistro' => 'required',
            'fechaRegistro' => 'required',
        ]);

        $input = $request->all();

        $expediente = Expediente::find($id);
        $expediente->update($input);

        return redirect()->route('expedientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expediente = Expediente::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Expediente')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $expediente->id;
        $lastActivity->save();

        $expediente->delete();
        return redirect()->route('expedientes.index');
    }
}
