<?php

namespace App\Http\Controllers;

use App\Models\bodega;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Instrumento;
use App\Models\Compra;

use App\Models\Clasificacion;
class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $bodegas=bodega::all();
        return view('bodegas.consulta',['bodegas'=>$bodegas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $instrumentos = instrumento::all();
        return view('bodegas.alta', ['instrumentos' => $instrumentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $nbodega=new bodega;
        $nbodega->cantidad=$request->cantidad;
        $nbodega->precio=$request->precio;
        $nbodega->instrumento = $request->instrumento;
        
        $nbodega->save();
        return redirect('/bodega');
    }

    /**
     * Display the specified resource.
     */
    public function show(bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $bodega)
    {
        //
       
        $instrumentos = instrumento::all();

        $bodegaedit=bodega::findorfail($bodega);
        return view('bodegas.actualizacion', ['bodega' => $bodegaedit , 'instrumentos'=> $instrumentos]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $bodega)
    {
        //
        $nbodega= bodega::findorfail($bodega);
        $nbodega->cantidad=$request->cantidad;
        $nbodega->precio=$request->precio;
        $nbodega->instrumento=$request->instrumento;
        
        $nbodega->save();
        return redirect('/bodega');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $bodega)
    {
        //
        bodega::destroy($bodega);
        return redirect('/bodega');
    }
}
