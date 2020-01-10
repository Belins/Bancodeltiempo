@extends('layouts.admin')
@section('contenidoAdmin')
    <h1 style="text-align:center;">@lang('messages.Gestion')</h1>
    <div id="datos">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">@lang('messages.Nombre')</th>
                    <th scope="col">@lang('messages.Email')</th>
                    <th scope="col">@lang('messages.Localidad')</th>
                    <th scope="col">@lang('messages.Telefono')</th>
                    <th scope="col">@lang('messages.Rol_de_usuario')</th>
                    <th scope="col">@lang('messages.Editar')</th>
                    <th scope="col">@lang('messages.Eliminar')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td></td>
                    <td>{{$usuario->phone}}</td>
                    <td>{{$usuario->role}}</td>
                    <td><a href="{{route('mostrarUsuario',$usuario->id)}}"><span class="glyphicon glyphicon-pencil">editar</span></a></td>
                    <td><a href="{{route('eliminarUsuario',$usuario->id)}}"><span class="glyphicon glyphicon-pencil">eliminar</span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection