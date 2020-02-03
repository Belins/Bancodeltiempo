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

    //Horas navbar
    $ofertas = Oferta::where('user_id', Auth::user()->id)->get();
    $trabajadas = 0;
    foreach($ofertas as $oferta)
    {
        foreach($oferta->confirmations as $confirmacion)
        {
            if ($confirmacion->estado == 2) {
                $trabajadas = $trabajadas + $confirmacion->oferta->tiempo;
            }
        }
    }
    $gastadas = $trabajadas - Auth::user()->tiempo +4;


    //SOLICITUDES DE TRABAJOS
        //Aceptados para pagar
    	$r_conf = Confirmation::where('user_id',Auth::user()->id)->where('estado', 1)->get();

    	$ofertas = Oferta::where('user_id', Auth::user()->id)->get();

    	//Añadimos a la misma tabla las confirmaciones por aceptar
    	foreach($ofertas as $oferta)
    	{
    		foreach($oferta->confirmations as $confirmacion)
    		{
    			if ($confirmacion->estado == 0) {
                    $r_conf[] = $confirmacion;
                }
    		}
    	}

    //TRABAJOS PENDIENTES
        $enproceso = array();
        foreach($ofertas as $oferta)
        {
            foreach($oferta->confirmations as $confirmacion)
            {
                if ($confirmacion->estado == 1) {
                    $enproceso[] = $confirmacion;
                }
            }
        }


    //TRABAJOS FINALIZADOS
    	//$servicioss = Confirmation::where('estado', 2)->get();
    	$servicios = array();
    	foreach($ofertas as $ofert)
    	{
    		foreach($ofert->confirmations as $confirmacion)
    		{
    			if ($confirmacion->estado == 2 || $confirmacion->estado == 3) {
    				$servicios[] = $confirmacion;
    			}
    		}
    	}

        return view('ofertas.servicios')->with(['r_conf' => $r_conf, 'servicios' => $servicios, 'enproceso' => $enproceso, 'trabajadas' => $trabajadas, 'gastadas' => $gastadas]);
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
        $conf = Confirmation::find($id);
        $conf->delete();
        return redirect(route('confirmations.index'));
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

    public function refuse($id)
    {
        $conf = Confirmation::find($id);
        $conf->estado = 3;
        $conf->save();
        return redirect(route('confirmations.index'));
    }

    public function trueque($id)
    {
    	$conf = Confirmation::find($id);
        if($conf->estado == 1 && $conf->user_id == Auth::user()->id)
        {
    	$conf->r_confirmado = 1;
    	$conf->estado = 2;
    	$conf->oferta->usuario->tiempo = $conf->oferta->usuario->tiempo + 2;
    	$conf->usuario->tiempo = $conf->usuario->tiempo - 2;
    	$conf->oferta->usuario->save();
    	$conf->usuario->save();
    	$conf->save();
    	return redirect(route('confirmations.index'));
        }
        else
        {
            return('no cuela');
        }
    }

}
