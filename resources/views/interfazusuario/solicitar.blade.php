<!DOCTYPE html>
<html>
<head>
	<title>Banco Del Tiempo</title>
	@include('/includes/refcode')
	<link href="css/solicitud" rel="stylesheet">
</head>
<body>
@include('/includes/headerUser')


<div id="contenedor">
	<div id="solicitud">
		<h3>{{$ofer->usuario->name}}</h3>
		<h4>{{$ofer->usuario->localidad}}</h4>
		<h4>{{$ofer->usuario->phone}}</h4>
		<h4>{{$ofer->usuario->email}}</h4>
		<button>Solicitar</button>
	</div>
</div>

</body>
</html>