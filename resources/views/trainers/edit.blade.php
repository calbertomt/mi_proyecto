@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')
	<form class="form-group" method="POST" action="{{url('/trainers/'.$trainer->slug)}}" enctype="multipart/form-data">
		@method('PUT')
		{{ csrf_field() }}
		@include('trainers.formTrainers')
		
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
	
@endsection