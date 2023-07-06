<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\Pdf;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $personal = Personal::paginate(5);
        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.crear');
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
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'sexo' => 'required',
            'edad' => 'required|integer',
            'fechaNac' => 'required|date',
            'telefono' => 'required|integer',
            'direccion' => 'required',
            'estado' => 'required',
            'tipo' => 'required'
        ]);

        $personal = Personal::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Personal')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $personal->id;
        $lastActivity->save();

        return redirect()->route('personal.index');
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
        $personal = Personal::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Personal')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $personal->id;
        $lastActivity->save();
        return view('personal.editar', compact('personal'));
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
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'sexo' => 'required',
            'edad' => 'required|integer',
            'fechaNac' => 'required|date',
            'telefono' => 'required|integer',
            'direccion' => 'required',
            'estado' => 'required',
            'tipo' => 'required'
        ]);

        $input = $request->all();
        $personal = Personal::find($id);
        $personal->update($input);

        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Personal')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $personal->id;
        $lastActivity->save();

        $personal->delete();
        return redirect()->route('personal.index');
    }

    public function pdf(Personal $personals)
    {

        $personal = Personal::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Personal')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $personals->id;
        $lastActivity->save();

        $pdf =PDF::loadView('personal.pdf', compact('personals','personal'));
        return $pdf->download('personal-'.$personals->id.'.pdf');
    }
}
