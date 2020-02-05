<?php

namespace App\Http\Controllers;
use App\mensaje;
use Mail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function CreateEmail($id){
        $datosMensaje = mensaje::find($id);
        return view('email.emailForm',['datosMensaje'=>$datosMensaje]);
    }

    public function contact(Request $request,$id){
        $subject = $request->input('asunto');
        $for = $request->input('email');
        $mensaje = $request->get('mensaje');
        Mail::send('email.email',$request->all(), function($msj) use($subject,$for){
            $msj->from("bancodeltiempozubiri@gmail.com","Banco Del Tiempo");
            $msj->subject($subject);
            $msj->to($for);
        });
        $MensajeRespondido = mensaje::find($id);
        $MensajeRespondido->respondido = 1;
        $MensajeRespondido->save();
        return redirect(route('mostrarMensajes'));
    }
}
