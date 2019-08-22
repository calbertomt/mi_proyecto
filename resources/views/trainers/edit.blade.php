@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')
	<form class="form-group" method="POST" action="{{url('/trainers/'.$trainer->slug)}}" enctype="multipart/form-data">
		@method('PUT')
		{{csrf_field()}}
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
	
@endsection