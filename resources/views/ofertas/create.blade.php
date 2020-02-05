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
	<div id="solicitud" class="mt-3 p-3 text-center text-white mb-5">
		<form method="POST" action="{{route('ofertas.store')}}">
	        @csrf
	        <h2 class="text-center">Crear oferta</h2>
	        
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
		            <input type="text" name="titulo">
				</div>
				@error('titulo')
					   <div class="alert alert-danger">{{ $message }}</div>
				@enderror
		        <div class="form-group" >
		            <label>Descripción</label><br>
		            ​<textarea name="descripcion" rows="3" cols="30" placeholder="Escribe una breve descripcion"></textarea>
		        </div>
		        @error('descripcion')
					   <div class="alert alert-danger">{{ $message }}</div>
				@enderror
		        <div class="form-group" >
		            <label>Tiempo (Ofreces en h)</label><br>
		            <input type="number" name="tiempo">
		        </div>
		        @error('tiempo')
					   <div class="alert alert-danger">{{ $message }}</div>
				@enderror
		        <div class="form-group" >
		            <label>Disponibilidad</label><br>
		            <label>Desde:</label><input type="date" name="disp_desde" placeholder="YYYY/MM/DD">
		            @error('disp_desde')
					   <div class="alert alert-danger">{{ $message }}</div>
					@enderror
		            <label>Hasta:</label><input type="date" name="disp_hasta" placeholder="YYYY/MM/DD">
		            @error('dips_hasta')
					   <div class="alert alert-danger">{{ $message }}</div>
					@enderror
		        </div>
	        
	        <button>Crear</button>
	    </form>
	</div>
</div>
@include('/includes/footer')
</body>
</html>