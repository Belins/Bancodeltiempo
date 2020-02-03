<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
	<link href="css/card.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/foro.css">
</head>
<body>
@include('/includes/headerUser')

<div id="contenedor" class="d-flex flex-row flex-wrap col-8 mb-5">
	
	@foreach($comentarios as $comentario)
		<div class="col-12">
		@if($comentario->user_id == Auth::user()->id)
			<div id="msg" class="col-6 mt-3 float-right">
		@else
			<div class="col-6 lead">
		@endif
				<h5>{{$comentario->usuario->name}} | <span class="text-primary">{{$comentario->usuario->especialidad}}</span></h5>
				<p class="bg-white">{{$comentario->mensaje}}</p>
			</div>
		</div>
	@endforeach

	<div class="col-8">
		<form action="{{route('foro.store')}}" method="POST">
			@csrf
			
			<div class="form-group">
				<label>¡Pregunta sin miedo!</label>
				<textarea class="form-control" name="mensaje"></textarea>
			</div>
			<div class="form-group">
				<button class="bg-info" type="">Enviar</button>
			</div>
		</form>
	</div>

</div>
@include('/includes/footer')
</body>
@include('/ofertas/contacto').

</html>



