<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
	<link href="/css/solicitud.css" rel="stylesheet">
</head>
<body>
@include('/includes/headerUser')


<div id="contenedor" class="container d-flex justify-content-center">
	<div id="solicitud" class="mt-4 text-center p-5 text-white">
		<h2 class="text-capitalize">Datos de contacto</h2>
		<h3>{{$ofer->usuario->name}}</h3>
		<h4>{{$ofer->usuario->especialidad}}</h4>
		<h4>{{$ofer->usuario->localidad}}</h4>
		<h4>{{$ofer->usuario->phone}}</h4>
		<h4>{{$ofer->usuario->email}}</h4>
		<div class="table-bordered border-white mb-4">
			<h3>Disponibilidad</h3>
			<h5 class="text-primary">{{$ofer->disp_desde}} - {{$ofer->disp_hasta}}</h5>
		</div>
		<?php $count = 0 ?>
		@foreach($ofer->confirmations as $confirmacion)
			@if($confirmacion->user_id == Auth::user()->id && $confirmacion->estado == 0)
			<?php $count = $count+1 ?>
			@endif
		@endforeach
		@if($count == 0 && Auth::user()->tiempo >= $ofer->tiempo)
			<a href="{{route('confirmations.createConf', $ofer->id)}}"><button>Solicitar</button>
		@endif
		@if($count == 1)
			<button class="badge-danger">En curso</button>
		@endif
		@if(Auth::user()->tiempo < $ofer->tiempo)
			<button class="badge-danger">Tiempo insuficiente</button>
		@endif
		
	</div>
</div>

</body>
</html>