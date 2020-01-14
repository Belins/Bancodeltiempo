<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
	<link href="css/card.css" rel="stylesheet">
</head>
<body>
@include('/includes/headerUser')


<div id="contenedor" class="d-flex flex-row flex-wrap">
	@foreach($listadoOfertas as $oferta)
		@if($oferta->usuario)
			<div class="card text-center" id="tarjeta">
			  <img src='img/Especialidades/{{$oferta->usuario->especialidad}}.jpg' alt="img" style="width:100%; height: 35%">
			  <div class="h-50">
				  <a data-toggle="modal" data-target="#modalContactForm"><h4>{{$oferta->usuario->especialidad}} {{$oferta->tiempo}}h</h4></a>
				  <p class="title h-25 text-justify p-1">{{$oferta->descripcion}}</p>
				  <p><strong>Puntuacion: </strong> {{$oferta->usuario->puntuacion}}/5</p>
				  <h5>{{$oferta->usuario->localidad}} <img src="img/logoubi.png" style="width: 20px; height: 20px;"></h5>		  
				  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwie6LfOv_jmAhUCSxoKHZ0pC3AQFjAAegQIEBAC&url=https%3A%2F%2Fes.linkedin.com%2F&usg=AOvVaw3ao7isY9xFsjr_4UTy0kO_"><i class="fa fa-linkedin mb-2"></i></a>
				  <p><a href="{{route('ofertas.show', $oferta->id)}}">
			  </div>
			  <button >Solicitar</button></a></p>
			</div>
		@endif
	@endforeach
</div>
@include('/includes/footer')
</body>
@include('/ofertas/contacto').

</html>



