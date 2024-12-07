<?php

namespace App\Http\Controllers;

use App\Models\clasificacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Instrumento;
use App\Models\Compra;
use App\Models\Bodega;


class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clasificaciones=clasificacion::all();
        return view('clasificaciones.consulta',['clasificaciones'=>$clasificaciones]);

               //vista.archivo------consulta--variable guardada
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clasificaciones=clasificacion::all();
        return view('clasificaciones.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nclasificacion=new clasificacion;
        $nclasificacion->tipo=$request->tipo;
       
        
      
        $nclasificacion->save();
        return redirect('/clasificacion');
    }

    /**
     * Display the specified resource.
     */
    public function show(clasificacion $clasificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $clasificacion)
    {
        //
        $editarclasificacion=clasificacion::findorfail($clasificacion);
        return view('clasificaciones.actualizacion', ['clasificaciones' => $editarclasificacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $clasificacion)
    {
        //
        $nclasificacion=clasificacion::findorfail($clasificacion);
        $nclasificacion->tipo=$request->tipo;
        
       
       
        $nclasificacion->save();
        return redirect('/clasificacion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $clasificacion)
    {
        //
        clasificacion::destroy($clasificacion);
        return redirect('/clasificacion');
    }
}
