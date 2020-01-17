@extends('layouts.admin')
@section('contenidoAdmin')
<h1 style="text-align:center;">@lang('messages.GestionMensajes')</h1>
    <div id="datos">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">@lang('messages.Nombre')</th>
                    <th scope="col" class="columnaMensaje">Titulo</th>
                    <th scope="col">@lang('messages.Mensaje')</th>
                    <th scope="col">Tiempo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ofertas as $oferta)
                <tr>
                    <th scope="row">{{$oferta->id}}</th>
                    <td>{{$oferta->usuario->name}}</td> 
                    <td>{{$oferta->titulo}}</td>                  
                    <td class="columnaMensaje">{{$oferta->descripcion}}</td>
                    <td>{{$oferta->tiempo}} h</span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection