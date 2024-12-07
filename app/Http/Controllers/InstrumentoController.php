<?php

namespace App\Http\Controllers;

use App\Models\instrumento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificacion;

use App\Models\Usuario;

use App\Models\Compra;
use App\Models\Bodega;



class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instrumentos=instrumento::all();
        return view('instrumentos.consulta',['instrumentos'=>$instrumentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
          
            $clasificaciones = Clasificacion::all();
                   
            return view('instrumentos.alta', ['clasificaciones' => $clasificaciones]);
        
     
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ninstrumento=new instrumento;
        $ninstrumento->nombre=$request->nombre;
        $ninstrumento->tipo=$request->clasificacion_id;
       
        
        $ninstrumento->save();
        return redirect('/instrumento');
    }

    /**
     * Display the specified resource.
     */
    public function show(instrumento $instrumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $instrumento)
    {
        //
      
        $clasificacion = clasificacion::all(); 

        $instrumentoeditar=instrumento::findorfail($instrumento);
        return view('instrumentos.actualizacion', ['instrumento' => $instrumentoeditar , 'clasificaciones'=> $clasificacion]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $instrumento)
    {
        //
        $ninstrumento= instrumento::findorfail($instrumento);
        $ninstrumento->nombre=$request->nombre;
        $ninstrumento->tipo=$request->clasificacion_id;
        
        $ninstrumento->save();
        return redirect('/instrumento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $instrumento)
    {
        //
        instrumento::destroy($instrumento);
            return redirect('/instrumento');
    }
}
