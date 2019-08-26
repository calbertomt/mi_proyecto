@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" src="{{asset('images').'/'.$trainer->avatar}}"
	alt="" class="card-img-top rounded-circle mx-auto d-block">	
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="{{url('/trainers/'.$trainer->slug.'/edit')}}" class="btn btn-primary" style="display:inline">Editar</a>
		<form class="form-group" method="POST" action="{{url('/trainers/'.$trainer->slug)}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{method_field('DELETE')}}
			<button type="submit" class="btn btn-danger" 
			onclick="return confirm('Esta seguro de Eliminar Al Entrenador?')">Eliminar</button>
		</form>
	</div>
@endsection
