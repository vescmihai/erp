<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use Spatie\Activitylog\Models\Activity;

class SectorController extends Controller
{
    public function index(Request $request)
    {
        $sectores = Sector::paginate(5);
        return view('sectores.index', compact('sectores'));
    }

    public function create()
    {
        return view('sectores.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);


        $sector = Sector::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Sectores')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sector->id;
        $lastActivity->save(); 

        return redirect()->route('sectores.index');
    }

    public function edit($id)
    {
        $sector = Sector::find($id);


        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Sectores')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sector->id;
        $lastActivity->save(); 
        return view('sectores.editar', compact('sector'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);

        $input = $request->all();

        $sector = Sector::find($id);
        $sector->update($input);

        return redirect()->route('sectores.index');
    }

    public function destroy($id)
    {

        $sector = Sector::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Sectores')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $sector->id;
        $lastActivity->save();

        $sector->delete();
        return redirect()->route('sectores.index');
    }
}
