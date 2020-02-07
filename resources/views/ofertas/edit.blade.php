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
	<div id="solicitud" class="mt-3 p-3 text-white text-center">
		<form method="post" action="{{route('guardarcambios',$oferta->id)}}">
			@csrf
			
	        <h2 class="text-center">Editar oferta</h2>
	        
		       	<div class="form-group" >
		            <label>Localidad</label><br>
		            <h5>{{$user->localidad}}</h5>
		        </div>
		        <div class="form-group">
		            <label>Especialidad</label><br>
		            <h5>{{$user->especialidad}}</h5>
				</div>
				<div class="form-group">
		            <label>Titulo</label><br>
		            <input type="text" name="titulo" value="{{$oferta->titulo}}">
				</div>
		        <div class="form-group" >
		            <label>Descripción</label><br>
		            ​<textarea name="descripcion" rows="3" cols="50" placeholder="Escribe una breve descripcion">{{$oferta->descripcion}}</textarea>
		        </div>
		        <div class="form-group" >
		            <label>Tiempo (Ofreces en h)</label><br>
		            <input type="number" name="tiempo" value="{{$oferta->tiempo}}">
		        </div>
		        <div class="form-group" >
		            <label>Disponibilidad</label><br>
		            <label>Desde:</label><input type="date" name="disp_desde" placeholder="YYYY/MM/DD" value="{{$oferta->disp_desde}}">
		            <label>Hasta:</label><input type="date" name="disp_hasta" placeholder="YYYY/MM/DD" value="{{$oferta->disp_hasta}}">
		        </div>
	        
	        <button>Editar</button>
	    </form>
	</div>
</div>

</body>
</html>