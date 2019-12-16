@extends('layouts.app')
@include('/includes/refcode')
@include('/includes/headerUser')
@section('title', 'Banco del tiempo')
@section('content')


<h2>Trabajadores disponibles</h2>
	<div>
		<button class="btn-success"><a href="" class="text-dark"> Añadir Disponibilidad</a></button>
	    <table class="align-content-center ml-5">
	      <tr>
	        <th>Localidad</th>
	        <th>Especialidad</th>
	        <th>Fecha-inicio</th>
	        <th>Fecha-fin</th>
	        <th>Nombre</th>
	        <th>Añadido</th>
	        <th>Contacto</th>
	      </tr>
	    </table>
	</div>
    

@endsection