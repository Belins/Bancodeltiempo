@extends('layouts.admin')
@section('contenidoAdmin')
<h1 style="text-align:center;">@lang('messages.GestionMensajes')</h1>
    <div id="datos">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">@lang('messages.Nombre')</th>
                    <th scope="col" class="columnaMensaje">@lang('messages.Mensaje')</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($mensajes as $mensaje)
                <tr>
                    <th scope="row">{{$mensaje->id}}</th>
                    <td>{{$mensaje->nombre}}</td>                  
                    <td class="columnaMensaje">{{$mensaje->comentario}}</td>
                    <td><a href="{{route('CrearEmail',$mensaje->id)}}"><span class="glyphicon glyphicon-pencil">contestar</span></a></td>
                    <td><a href="{{route('eliminarMensaje',$mensaje->id)}}"><span class="glyphicon glyphicon-pencil">eliminar</span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection