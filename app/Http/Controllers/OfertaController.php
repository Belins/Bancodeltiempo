<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\User;
use App\Confirmation;
use Auth;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::where('user_id',Auth::user()->id)->get();
        return view('ofertas.misofertas', ['ofertas'=> $ofertas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::user()->id);
        return view('ofertas.create', ['user'=> $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ofer = new Oferta;
        $ofer->user_id = Auth::user()->id;
        $ofer->descripcion = $request -> get('descripcion');
        $ofer->tiempo = $request -> input('tiempo');
        $ofer->disp_desde = $request -> input('disp_desde');
        $ofer->disp_hasta = $request -> input('disp_hasta');
        $ofer->titulo = $request -> input('titulo');
        
        $ofer->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ofer = Oferta::find($id);
        return view('ofertas.show',['ofer'=>$ofer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visibilidad = Oferta::find($id);
        if($visibilidad->visible == 1){
            Oferta::where('id',$id)->update(['visible'=>0]);
        }
        elseif($visibilidad->visible == 0){
            Oferta::where('id',$id)->update(['visible'=>1]);
        }

        return redirect(route('ofertas.index'));
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

    public function editofert(Request $request, $id)
    {
        $descripcion = $request -> get('descripcion');
        $tiempo = $request -> input('tiempo');
        $disp_desde = $request -> input('disp_desde');
        $disp_hasta = $request -> input('disp_hasta');
        $titulo = $request -> input('titulo');

        Oferta::where('id',$id)->update(['descripcion'=>$descripcion,'tiempo'=>$tiempo,'disp_desde'=>$disp_desde,'disp_hasta'=>$disp_hasta,'titulo'=>$titulo]);
        return redirect(route('ofertas.index'));
    }

    public function MostrarOferta($id){
        $oferta = Oferta::find($id);
        $user = User::find(Auth::user()->id);
        return view('ofertas.edit',['oferta'=>$oferta,'user'=>$user]);
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

    public function MostrarOfertas(){
        $ofertas = Oferta::all();
        return view('admin.GestionOfertas',['ofertas'=>$ofertas]);
    }
}
