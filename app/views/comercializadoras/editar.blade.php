@extends('admin.dashboard')

@section('controller')
	<div class="container">
		<h2>Editar comercializadora</h2>
		<hr>
		<div class="col-sm-5">

			@if(sizeof($errors) > 0)
				<div class="alert alert-danger" role="alert">
					{{ HTML::ul($errors->all()) }}	
				</div>
			@endif
			{{ Form::model($comercializadora, array('action' => array('ComercializadoraController@update', $comercializadora->id), 'method' => 'PUT'))}}
				<div class="row">
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre') }}
						{{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
					</div>
					<div class="form-group">
						{{ Form::label('direccion', 'Direccion') }}
						{{ Form::text('direccion', null, array('class' => 'form-control', 'placeholder' => 'Direccion')) }}
					</div>
					<div class="form-group">
						{{ Form::label('estado', 'Estado') }}
						{{ Form::text('estado', null, array('class' => 'form-control', 'placeholder' => 'Estado')) }}
					</div>
					<div class="form-group">
						{{ Form::label('ciudad', 'Ciudad') }}
						{{ Form::text('ciudad', null, array('class' => 'form-control', 'placeholder' => 'Ciudad')) }}
					</div>
					<div class="form-group">
						{{ Form::label('telefono', 'Telefono') }}
						{{ Form::text('telefono', null, array('class' => 'form-control', 'placeholder' => 'Teléfono')) }}
					</div>
					<div class="form-group">
						{{ Form::label('logo', 'Logo') }}
						{{ Form::file('logo') }}
					</div>
					<div class="form-group">
						{{ Form::label('url_compra', 'Enlace para compra directa') }}
						{{ Form::text('url_compra', null, array('class' => 'form-control', 'placeholder' => 'Enlace para compra directa')) }}
					</div>
					{{ Form::hidden('lat', null,array('id' => 'lat')) }}
					{{ Form::hidden('log', null,array('id' => 'log')) }}
					{{ Form::submit('Actualizar comercializadora', array('class' => 'btn btn-comprar pull-right'))}}
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-6" id="mapaComercializadora"></div>	
	</div>
@stop