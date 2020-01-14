@extends('layouts.admin')
@section('contenidoAdmin')
    <div id="FormEmail">
        <form action="{{route('contact')}}" method="post">
            {{csrf_field()}}
            <div class="row m-4">
                <label><b>Email a responder : </b></label>&nbsp;<br>
                <input type="email" id="to" name="email" value="{{$datosMensaje->email}}" readonly/>
            </div>
            <div class="row m-4">
                <label><b>Asunto del email : </b></label>&nbsp;<br>
                <input type="text" name="asunto" id="asunto" value="Atención al cliente BANCO DEL TIEMPO"/>
            </div>
            <div class="row m-4">
                <label><b>Mensaje a enviar : </b></label>&nbsp; 
                <textarea id="mensaje" name="msg" rows="10" cols="100">Buenas {{$datosMensaje->nombre}},</textarea>
            </div>
            <input type="hidden" name="nombre" value="{{$datosMensaje->nombre}}">
            <div class="row m-4 justify-content-center">
                <input type="submit" value="enviar respuesta"/>
            </div>
        </form>
    </div>
@endsection