<?php

namespace App\Http\Controllers;
use App\Confirmation;
use App\Oferta;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$r_conf = Confirmation::where('user_id',Auth::user()->id)->where('estado', 1)->get();

    	$ofertas = Oferta::where('user_id', Auth::user()->id)->get();
    	
    	foreach($ofertas as $oferta)
    	{
    		foreach($oferta->confirmations as $confirmacion)
    		{
    			if ($confirmacion->estado == 0) {
                    $r_conf[] = $confirmacion;
                }
    		}
    	}

    	
    	//$servicioss = Confirmation::where('estado', 2)->get();
    	$servicios = array();
    	foreach($ofertas as $ofert)
    	{
    		foreach($ofert->confirmations as $confirmacion)
    		{
    			if ($confirmacion->estado == 2) {
    				$servicios[] = $confirmacion;
    			}
    		}
    	}

        return view('ofertas.servicios')->with(['r_conf' => $r_conf, 'servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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

    public function createConf($id)
    {
        $conf = new Confirmation;
        $conf->oferta_id = $id;
        $conf->user_id = Auth::user()->id;
        $conf->save();
        return redirect(route('home'));
    }

    public function acept($id)
    {
    	$conf = Confirmation::find($id);
    	$conf->estado = 1;
    	$conf->o_confirmado = 1;
    	$conf->save();
    	return redirect(route('confirmations.index'));
    }

    public function trueque($id)
    {
    	$conf = Confirmation::find($id);
    	$conf->r_confirmado = 1;
    	$conf->estado = 2;
    	$conf->oferta->usuario->tiempo = $conf->oferta->usuario->tiempo + 2;
    	$conf->usuario->tiempo = $conf->usuario->tiempo - 2;
    	$conf->oferta->usuario->save();
    	$conf->usuario->save();
    	$conf->save();
    	return redirect(route('confirmations.index'));
    }
}
