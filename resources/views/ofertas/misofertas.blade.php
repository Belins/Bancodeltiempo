<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
    @include('/includes/refcode')
	<link href="css/card.css" rel="stylesheet">
</head>
<body>
@include('/includes/headerUser')
<div id="contenedor" class="container d-flex flex-row flex-wrap">

@foreach($ofertas as $oferta)
    @if($oferta->visible == 1)
	    <div class="card text-center" id="tarjeta">
    @elseif($oferta->visible == 0)
        <div class="card text-center transparencia" id="tarjeta">
    @endif
		<img src='img/Especialidades/{{$oferta->usuario->especialidad}}.jpg' alt="img" style="width:100%; height: 35%">
		<div class="h-50">
			<h4>{{$oferta->titulo}} {{$oferta->tiempo}}h</h4>
			<p class="title h-25 text-justify p-1">{{$oferta->descripcion}}</p>
			<p><strong>Puntuacion: </strong> {{$oferta->usuario->puntuacion}}/5</p>		  
            <h5>{{$oferta->disp_desde}} -- {{$oferta->disp_hasta}}</h5>
        </div>
        <a href="{{route('editaroferta',$oferta->id)}}"><button>Editar</button></a><br>
        @if($oferta->visible == 1)
            <a href="{{route('ofertas.edit',$oferta->id)}}"><button>Desactivar</button></a>
        @else
            <a href="{{route('ofertas.edit',$oferta->id)}}"><button>Activar</button></a>
        @endif
	</div>
@endforeach
</div>

</body>
</html>