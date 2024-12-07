<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Instrumento;

use App\Models\Bodega;
use App\Models\Clasificacion;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $compras=compra::all();
        return view('compras.consulta',['compras'=>$compras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Obtiene todas las clasificaciones
        $usuarios = usuario::all();
        $instrumentos = instrumento::all();
        
        // Envía estas variables a la vista
        return view('compras.alta', ['usuarios' => $usuarios,'instrumentos' => $instrumentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ncompra=new compra;
        $ncompra->fecha=$request->fecha;
        $ncompra->usuario=$request->usuario;
        $ncompra->instrumento=$request->instrumento;

       
        
        $ncompra->save();
        return redirect('/compra');
    }

    /**
     * Display the specified resource.
     */
    public function show( $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $compra)
    {
        //
        $usuarios = usuario::all();
        $instrumentos = instrumento::all();

        
        $compraseditar=compra::findorfail($compra);
        return view('compras.actualizacion', ['compra' => $compraseditar , 'usuarios' => $usuarios,'instrumentos' => $instrumentos]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $compra)
    {
        //
        $ncompra= compra::findorfail($compra);
       
        $ncompra->fecha=$request->fecha;
        $ncompra->usuario=$request->usuario;
        $ncompra->instrumento=$request->instrumento;
        
       
        $ncompra->save();
        return redirect('/compra');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compra $compra)
    {
        //
        compra::destroy($compra);
            return redirect('/compra');
    }
}
