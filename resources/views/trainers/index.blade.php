@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
	@if(Session::has('status_del'))
		<div class="alert alert-danger" role="alert">
			{{ Session::get('status_del')}}
		</div>
	@elseif(Session::has('status_in'))
		<div class="alert alert-success" role="alert">
			{{ Session::get('status_in')}}
		</div>
	@endif
	<a href="{{url('/trainers/create')}}" class="btn btn-primary" style="margin-top: 20px">New Trainer</a>
	<div class="row">
		@foreach($trainers as $trainer)
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 70px">
				  <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" src="images/{{$trainer->avatar}}"
				  alt="" class="card-img-top rounded-circle mx-auto d-block">
				  <div class="card-body">
				    <h5 class="card-title">{{$trainer->name}}</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
				    </p>
				    <a href="{{url('/trainers/'.$trainer->slug)}}" class="btn btn-primary">Ver más.....</a>
				  </div>
				</div>
			</div>
		@endforeach		
	</div>		
@endsection
