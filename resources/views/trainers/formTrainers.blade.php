	
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" 
			value="{{ isset($trainer->name) ? $trainer->name:old('name') }}">
			{!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
		</div>
		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" name="slug" class="form-control {{ $errors->has('slug') ? 'is-invalid':'' }}" 
			value="{{ isset($trainer->slug) ? $trainer->slug:old('slug') }}">
			{!! $errors->first('slug','<div class="invalid-feedback">:message</div>') !!}
		</div>
		<div class="form-group">
			@if(isset($trainer->avatar))
				<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" 
				src="{{asset('images').'/'.$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
			@endif
			<label for="">Avatar</label>
			<input type="file" name="avatar" class="form-control-file {{ $errors->has('avatar') ? 'is-invalid':'' }}"
			value="">
			{!! $errors->first('avatar','<div class="invalid-feedback">:message</div>') !!}
		</div>
	