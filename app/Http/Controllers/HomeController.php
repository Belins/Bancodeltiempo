<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Oferta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

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

        $listadoOfertas = Oferta::where('user_id', '!=' , Auth::user()->id)->get();

        return view('home')->with(['listadoOfertas' => $listadoOfertas, 'trabajadas' => $trabajadas, 'gastadas' => $gastadas]);
    }


}
