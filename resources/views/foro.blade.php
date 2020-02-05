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
			<div id="msg" class="col-md-5 col-sm-12 mt-3 float-right alert alert-success" role="alert">
		@else
			<div class="col-md-5 col-sm-12 lead alert alert-dark">
		@endif
				<h5 class="text-center">{{$comentario->usuario->name}} | <span class="text-primary">{{$comentario->usuario->especialidad}}</span></h5>
				<p class="">{{$comentario->mensaje}}</p>
			</div>
		</div>
	@endforeach

	<div class="col-12 d-flex justify-content-center">
		<div class="col-md-6 col-sm-12">
			<form action="{{route('foro.store')}}" method="POST">
				@csrf
				
				<div class="form-group">
					<label class="text-white">¡Pregunta algo!</label>
					<textarea class="form-control" name="mensaje" required="true"></textarea>
				</div>
				<div class="form-group d-flex justify-content-center">
					<button class="bg-dark col-md-4 col-sm-12" type="">Enviar</button>
				</div>
			</form>
		</div>
	</div>

</div>
@include('/includes/footer')
</body>
@include('/ofertas/contacto').

</html>



