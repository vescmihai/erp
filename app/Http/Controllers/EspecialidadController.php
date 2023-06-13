<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;
use Spatie\Activitylog\Models\Activity;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $especialidades = Especialidad::paginate(5);
        return view('especialidades.index', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especialidades.crear');
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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        $especialidad = Especialidad::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Especialidad')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $especialidad->id;
        $lastActivity->save(); 

        return redirect()->route('especialidades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad = Especialidad::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Especialidad')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $especialidad->id;
        $lastActivity->save(); 
        return view('especialidades.edit', compact('especialidad'));
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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $input = $request->all();

        $especialidad = Especialidad::find($id);
        $especialidad->update($input);

        return redirect()->route('especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $especialidad = Especialidad::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Especialidad')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $especialidad->id;
        $lastActivity->save();

        $especialidad->delete();
        return redirect()->route('especialidades.index');
    }
}

