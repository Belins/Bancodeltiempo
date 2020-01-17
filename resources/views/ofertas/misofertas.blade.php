<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
</head>
<body>
@include('/includes/headerUser')

<div id="contenedor" class="container ">
    <div class="row justify-content-center">
        <h1>Mis ofertas</h1>
    </div>
    <div class="row">
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
                <td class="">{{$oferta->disp_desde}}</td>
                <td class="">{{$oferta->disp_hasta}}</td>
                <td class="">{{$oferta->tiempo}}</td>
                <td class="">{{$oferta->descripcion}}</td>
                <td><a href=""><span class="glyphicon glyphicon-pencil">editar</span></a></td>
                <td><a href="{{route('ofertas.destroy',$oferta->id)}}"><span class="glyphicon glyphicon-pencil">eliminar</span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>

</div>

</body>
</html>