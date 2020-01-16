<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;

class GestionUsuarioController extends Controller
{
    //Funcion para mostrar formulario con los datos del usuario//
    public function SacarUser(){
        $DatosUsuario = User::find(Auth::user()->id);
        return view('GestionUsuario',['DatosUsuario'=>$DatosUsuario]);
    }

    //Funcion para cambiar los usuarios//
    public function ModUser(request $datos){
        $id=$datos->get('id');
        $name=$datos->get('name');
        $email=$datos->get('email');
        $phone=$datos->get('tlf');
        $localidad=$datos->get('localidad');
        $avatar = $datos->avatar->getClientOriginalExtension();
        $datos->avatar->move(public_path('img/avatares'), $avatar);
        
        if($datos->get('password') != ""){
            $password = bcrypt($datos->get('password'));
            $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'password'=>$password,'image'=>$avatar]);
        }
        else
        {
            $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'image'=>$avatar]);
        } 
        return view('GestionUsuario',['id'=>$id]);
    }

    //Funcion para mostrar todos los usuarios existentes en el panel de admin
    public function index(){  
        $Usuarios = User::all(); 
        return view('admin.gestionUsuarios',['usuarios'=>$Usuarios]);
    }

    //Mostrar datos del usuario para el admin
    public function show($id){
        $DatosUsuario = User::find($id);
        return view('admin.FormDatosUser',['DatosUsuario'=>$DatosUsuario]);
    }

    //Eliminar usuario desde panel de admin
    public function DeleteUser($id){
        User::destroy($id);
        return redirect(route('mostrarUsuarios'));
    }

    //Funcion para cambiar los usuarios desde administrador
    public function Alter(request $datos, $id){
        $name = $datos->get('name');
        $email = $datos->get('email');
        $phone = $datos->get('tlf');
        $localidad = $datos->get('localidad');
        if($datos->get('password') != ""){
            $password = bcrypt($datos->get('password'));
            $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'password'=>$password]);
        }
        else
        {
            $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad]);
        } 
        return redirect(route('mostrarUsuarios'));
    }
}
