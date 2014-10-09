@extends('admin.dashboard')

@section('controller')
	<div class="container">
		<h2>Nuevo sponsor</h2>
		<hr>
		@if(sizeof($errors) > 0)
			<div class="alert alert-danger" role="alert">
				{{ HTML::url($errors->all()) }}
			</div>
		@endif
		{{ Form::open(array('action' => "SponsorController@store", 'files'=>true, 'method' => 'post')) }}
			<div class="form-group">
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
			</div>
			<div class="form-group">
				{{ Form::label('logo', 'Logo') }}
				{{ Form::file('logo') }}
			</div>
			{{ Form::submit('Guardar sponsor', array('class' => 'btn btn-comprar pull-right')) }}
		{{ Form::close() }}
	</div>
@stop