<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelta=Oferta::all();
        return response()->json(['status'=>'ok','data'=>$vuelta], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuelta=Oferta::find($id);
        return response()->json(['status'=>'ok','data'=>$vuelta], 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function MostarOfertasFechas($fechaInicio, $fechaFin )
    {
        $Oferta = array();
        $Oferta[] = Oferta::whereBetween('created_at',[$fechaInicio,$fechaFin])->count();
        $Oferta[] = Oferta::whereBetween('created_at',[$fechaInicio,$fechaFin])->where('visible',1)->count();
        return $Oferta;
        
    }
}
