@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" src="../images/{{$trainer->avatar}}"
	alt="" class="card-img-top rounded-circle mx-auto d-block">	
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="{{url('/trainers/'.$trainer->slug.'/edit')}}" class="btn btn-primary">Editar</a>
	</div>
@endsection
