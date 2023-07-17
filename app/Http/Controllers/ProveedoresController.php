<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Productos;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\Pdf;

class ProveedoresController extends Controller
{
    public function index(Request $request)
    {   
        $productos=Productos::all();
        $proveedores = Proveedor::paginate(5);
        
        return view('proveedores.index',compact('proveedores','productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $productos = Productos::all();
        $proveedores=Proveedor::all();
        return view('proveedores.crear',compact('proveedores','productos'));
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
            'nombre'=>'required',
            'contacto'=>'required',
            'telefono'=>'required',
            'idProducto'=>'required',
        ]);
        $productos=Productos::all();
        $proveedores = Proveedor::create($request->all());
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Proveedores')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $proveedores->id;
        $lastActivity->save(); 

        return redirect()->route('proveedores.index',compact('proveedores','productos'));
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
    {   $productos=Productos::all();
        $proveedores = Proveedor::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Proveedores')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $proveedores->id;
        $lastActivity->save(); 
        return view('proveedores.editar', compact('proveedores','productos'));
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
            'nombre'=>'required',
            'contacto'=>'required',
            'telefono'=>'required',
            'idProducto'=>'required',
        ]);
        $productos=Productos::all();
        $input = $request->all();
        $proveedores = Proveedor::find($id);
        $proveedores->update($input);

        return redirect()->route('proveedores.index',compact('proveedores','productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $productos=Productos::all();
        $proveedores = Proveedor::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Proveedores')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $proveedores->id;
        $lastActivity->save();

        $proveedores->delete();
        return redirect()->route('proveedores.index',compact('proveedores','productos'));
    }

    public function pdf(Proveedor $proveedores) 
    {   $productos=Productos::all();
        $proveedores = Proveedor::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Proveedores')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $proveedores->id;
        $lastActivity->save();

        $pdf =PDF::loadView('proveedores.pdf', compact('proveedores','productos'));
        return $pdf->download('proveedores_'.$proveedores->id.'.pdf');
    }
}
