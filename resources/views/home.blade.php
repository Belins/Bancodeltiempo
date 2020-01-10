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
			<div class="card text-center" style="background-color: hsla(35, 70%, 70%, 0.6)">
			  <img src='img/Especialidades/{{$oferta->usuario->especialidad}}.jpg' alt="img" style="width:100%; height: 35%">
			  <a data-toggle="modal" data-target="#modalContactForm"><h4>{{$oferta->usuario->especialidad}}</h4></a>
			  <h5>{{$oferta->tiempo}}h</h5>
			  <p class="title">{{$oferta->descripcion}}</p>
			  <p><strong>Puntuacion: </strong> {{$oferta->usuario->puntuacion}}/5</p>
			  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwie6LfOv_jmAhUCSxoKHZ0pC3AQFjAAegQIEBAC&url=https%3A%2F%2Fes.linkedin.com%2F&usg=AOvVaw3ao7isY9xFsjr_4UTy0kO_"><i class="fa fa-linkedin mb-2"></i></a>
			  <p><button>Solicitar</button></p>
			</div>
		@endif
	@endforeach
</div>
@include('/includes/footer')
</body>
@include('contacto').

</html>



