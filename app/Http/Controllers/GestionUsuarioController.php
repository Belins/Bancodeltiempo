<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GestionUsuarioController extends Controller
{
    //Funcion para mostrar formulario con los datos del usuario//
    public function SacarUser(request $id){
        $DatosUsuario = User::find($id);
        return view('GestionUsuario',['DatosUsuario'=>$DatosUsuario]);
    }

    //Funcion para cambiar los usuarios//
    public function ModUser(request $datos){
        $id=$datos->get('id');
        $name=$datos->get('name');
        $email=$datos->get('email');
        $phone=$datos->get('tlf');
        $localidad=$datos->get('localidad');
        if($datos->get('password') != ""){
            $password=$datos->get('password');
        };
        $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad]);
        
        return view('GestionUsuario',['id'=>$id]);
    }
}
