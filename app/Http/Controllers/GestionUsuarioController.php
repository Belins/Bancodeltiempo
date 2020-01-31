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
        $id=Auth::user()->id;
        $name=$datos->get('name');
        $email=$datos->get('email');
        $phone=$datos->get('tlf');
        $especialidad=$datos->get('especialidad');
        $localidad=$datos->get('localidad');
        if(!empty($datos->avatar)){
            $filename = $datos->avatar;
            $avatar = $datos->avatar->getClientOriginalExtension();
            $filename = Auth::user()->id.'.'.$avatar;
            $datos->avatar->move(public_path('img/avatares'), $filename);
            
            if($datos->get('password') != ""){
                $password = bcrypt($datos->get('password'));
                $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'password'=>$password,'image'=>$filename,'especialidad'=>$especialidad]);
            }
            else
            {
                $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'image'=>$filename,'especialidad'=>$especialidad]);
            } 
        }
        else
        {
            if($datos->get('password') != ""){
                $password = bcrypt($datos->get('password'));
                $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'password'=>$password,'especialidad'=>$especialidad]);
            }
            else
            {
                $Usuario = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'localidad'=>$localidad,'especialidad'=>$especialidad]);
            }
        }
        return redirect(route('GestionUsuario',['id'=>$id]));
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
