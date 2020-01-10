@extends('layouts.admin')
@section('contenidoAdmin')
    <h1 style="text-align:center;">Gestion de usuarios</h1>
    <div id="datos">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Rol de usuario</th>
                    <th scope="col">editar</th>
                    <th scope="col">eliminar</th>
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