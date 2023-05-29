<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

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

        $input = $request->all();

        Sector::create($input);

        return redirect()->route('sectores.index');
    }

    public function edit($id)
    {
        $sector = Sector::find($id);
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
        Sector::find($id)->delete();
        return redirect()->route('sectores.index');
    }
}
