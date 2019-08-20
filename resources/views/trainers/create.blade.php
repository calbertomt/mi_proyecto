 
@extends('layouts.app')

@section('title', 'Trainers create')

@section('content')
	<form class="form-group" method="POST" action="{{url('/trainers')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
	
@endsection
