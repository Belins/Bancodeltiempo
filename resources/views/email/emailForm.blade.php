@extends('layouts.admin')
@section('contenidoAdmin')
    <div id="FormEmail">
        <form action="{{route('contact')}}" method="post">
            {{csrf_field()}}
            <div class="row m-4">
                <label>Email a responder : </label><br>
                <input type="email" id="to" name="email" value="{{$datosMensaje->email}}" readonly/>
            </div>
            <div class="row m-4">
                <label>Asunto del email : </label><br>
                <input type="text" name="asunto" id="asunto" value="Atención al cliente BANCO DEL TIEMPO"/>
            </div>
            <div class="row m-4">
                <label>Mensaje a enviar : </label>
                <textarea id="mensaje" name="msg" rows="10" cols="100">Buenas {{$datosMensaje->nombre}},</textarea>
            </div>
            <div class="row m-4">
                <input type="submit" value="enviar respuesta"/>
            </div>
        </form>
    </div>
@endsection