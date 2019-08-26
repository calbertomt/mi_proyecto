 
@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
	{{-- /*VALIDADATE*/
	  ************************************(MENSAJE DE ALERTA EN LA PARTE SUPERIOR DE LA PANTALLA)**************************************
	  Primero preguntamos si la variable $errors (array que contiene errores) existe utilizando el metodo any 
	  Segundo si existe recorremos con un foreach todos los posibles errores con la función ally vamos a iterarlos en la variable error--}}
	{{-- @if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif --}}
	
	<form class="form-group" method="POST" action="{{url('/trainers')}}" enctype="multipart/form-data">
		{{csrf_field()}}

		@include('trainers.formTrainers')

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
	
@endsection
