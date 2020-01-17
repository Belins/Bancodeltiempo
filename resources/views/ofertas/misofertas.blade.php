<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
</head>
<body>
@include('/includes/headerUser')

<div id="contenedor" class="container">
<table class="table table-striped table-dark">
    <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">@lang('messages.Especialidad')</th>
                <th scope="col">@lang('messages.FechaInicio')</th>
                <th scope="col">@lang('messages.FechaFin')</th>
                <th scope="col">@lang('messages.Tiempo')</th>
                <th scope="col">@lang('messages.Descripcion')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ofertas as $oferta)
            <tr>
                <th scope="row">{{$oferta->id}}</th>
                <td>{{$oferta->usuario->especialidad}}</td>                  
                <td class="columnaMensaje">{{$oferta->disp_desde}}</td>
                <td class="columnaMensaje">{{$oferta->disp_hasta}}</td>
                <td class="columnaMensaje">{{$oferta->tiempo}}</td>
                <td class="columnaMensaje">{{$oferta->descripcion}}</td>
                <td><a href="{{route('eliminarMensaje',$oferta->id)}}"><span class="glyphicon glyphicon-pencil">eliminar</span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="text-center">Confirmaciones de solicitudes pendientes</h2>
    <table class="table table-striped table-dark">
    <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">@lang('messages.Especialidad')</th>
                <th scope="col">@lang('messages.Descripcion')</th>
                <th scope="col">@lang('messages.Nombre')</th>
                <th scope="col">@lang('messages.Email')</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($confirmaciones as $conf)
            <tr>
                <td></td>                  
                <td class="columnaMensaje">{{$conf->oferta->usuario->especialidad}}</td>
                <td class="columnaMensaje">{{$conf->oferta->descripcion}}</td>
                <td class="columnaMensaje">{{$conf->usuario->name}}</td>
                <td class="columnaMensaje">{{$conf->usuario->email}}</td>
                <td><a href=""><span class="glyphicon glyphicon-pencil">Confirmar</span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>