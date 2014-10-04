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
		{{Form::model($sponsor, array('action' => array('SponsorController@update', $sponsor->id), 'method' => 'PUT')) }}
			<div class="form-group">
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
			</div>
			<div class="form-group">
				{{ Form::label('logo', 'Logo') }}
				{{ Form::file('logo') }}
			</div>
			{{ Form::submit('Actualizar sponsor', array('class' => 'btn btn-comprar pull-right')) }}
		{{ Form::close() }}
	</div>
@stop