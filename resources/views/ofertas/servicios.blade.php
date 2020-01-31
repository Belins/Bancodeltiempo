<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
    <link rel="stylesheet" type="text/css" href="css/serv.css">
</head>
<body>
@include('/includes/headerUser')

<div id="contenedor" class="container">

    <h1 class="text-center mt-3">Solicitudes de Trabajos</h1>
    <table class="table table-striped">
    <thead>
            <tr>
                <th scope="col">Estado</th>
                <th scope="col">@lang('messages.Especialidad')</th>
                <th scope="col">@lang('messages.Descripcion')</th>
                <th scope="col">@lang('messages.Nombre')</th>
                <th scope="col">@lang('messages.Email')</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($r_conf as $conf)
            @if($conf->estado == 0)
            <tr class="bg-info">
            @endif
            @if($conf->estado == 1)
            <tr class="bg-success">
            @endif
                @if($conf->estado == 0)
                <td class="columnaMensaje">Sin confirmar</td>  
                @endif
                @if($conf->estado == 1)
                <td class="columnaMensaje">Aceptado</td>  
                @endif    
                <td class="columnaMensaje">{{$conf->oferta->usuario->especialidad}}</td>
                <td class="columnaMensaje">{{$conf->oferta->descripcion}}</td>
                <td class="columnaMensaje">{{$conf->usuario->name}}</td>
                <td class="columnaMensaje">{{$conf->usuario->email}}</td>
                @if($conf->estado == 0)
                <td><a href="{{route('confirmations.acept', $conf->id)}}" style="color: green;"><span class="glyphicon glyphicon-pencil">Aceptar</span></a></td>
                <td><a href="{{route('confirmations.refuse', $conf->id)}}" style="color: red;"><span class="glyphicon glyphicon-pencil">Rechazar</span></a></td>
                @endif
                @if($conf->estado == 1)
                <td><a href="{{route('confirmations.trueque',$conf->id)}}"><span class="glyphicon glyphicon-pencil">Pagar</span></a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <h1 class="text-center">Trabajos en proceso</h1>
    <table class="table table-striped">
    <thead>
            <tr>
                <th scope="col">Estado</th>
                <th scope="col">@lang('messages.Especialidad')</th>
                <th scope="col">@lang('messages.Descripcion')</th>
                <th scope="col">@lang('messages.Nombre')</th>
                <th scope="col">@lang('messages.Email')</th>
                <th scope="col">Tiempo</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($enproceso))
                @foreach($enproceso as $servicio)
                <tr class="bg-warning">
                    <td class="columnaMensaje">En proceso</td>   
                    <td class="columnaMensaje">{{$servicio->oferta->usuario->especialidad}}</td>
                    <td class="columnaMensaje">{{$servicio->oferta->descripcion}}</td>
                    <td class="columnaMensaje">{{$servicio->usuario->name}}</td>
                    <td class="columnaMensaje">{{$servicio->usuario->email}}</td>
                    <td class="columnaMensaje text-center">{{$servicio->oferta->tiempo}}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <h1 class="text-center">Trabajos finalizados</h1>
    <table class="table table-striped">
    <thead>
            <tr>
                <th scope="col">Estado</th>
                <th scope="col">@lang('messages.Especialidad')</th>
                <th scope="col">@lang('messages.Descripcion')</th>
                <th scope="col">@lang('messages.Nombre')</th>
                <th scope="col">@lang('messages.Email')</th>
                <th scope="col">Tiempo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
            <tr>
                @if($servicio->estado == 2)
                <td class="columnaMensaje bg-success">Realizado</td>
                @endif
                @if($servicio->estado == 3)
                <td class="columnaMensaje bg-danger">Rechazado</td>
                @endif
                <td class="columnaMensaje">{{$servicio->oferta->usuario->especialidad}}</td>
                <td class="columnaMensaje">{{$servicio->oferta->descripcion}}</td>
                <td class="columnaMensaje">{{$servicio->usuario->name}}</td>
                <td class="columnaMensaje">{{$servicio->usuario->email}}</td>
                <td class="columnaMensaje text-center">{{$servicio->oferta->tiempo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>