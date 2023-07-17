<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Productos;
Use App\Models\Proveedor;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\Pdf;
class ProductosController extends Controller
{
    public function index(Request $request)
    {   

        $productos = Productos::paginate(5);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $productos = Productos::all();
        return view('productos.crear',compact('productos'));
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
            'presentacion'=> 'required',
            'concentracion'=>'required',
            'fechaVencimiento'=>'required',
        ]);
        $productos = Productos::create($request->all());
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Productos')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $productos->id;
        $lastActivity->save(); 

        return redirect()->route('productos.index',compact('productos'));
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
        $productos = Productos::find($id);
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Productos')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $productos->id;
        $lastActivity->save(); 
        return view('productos.editar', compact('productos'));
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
            'presentacion' => 'required',
            'concentracion'=>'required',
            'fechaVencimiento'=>'required',
        ]);

        $input = $request->all();
        $productos = Productos::find($id);
        $productos->update($input);

        return redirect()->route('productos.index',compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $productos = Productos::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Productos')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $productos->id;
        $lastActivity->save();

        $productos->delete();
        return redirect()->route('productos.index');
    }

    public function pdf(Productos $productos) 
    {
        $productos = Productos::all();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Productos')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $productos->id;
        $lastActivity->save();

        $pdf =PDF::loadView('productos.pdf', compact('productos'));
        return $pdf->download('productos'.$productos->id.'.pdf');
    }
}
