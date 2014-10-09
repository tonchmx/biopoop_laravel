@extends('admin.dashboard')

@section('controller')
	<div class="container">
		<h2>Nueva comercializadora</h2>
		<hr>
		<div class="col-sm-5">

			@if(sizeof($errors) > 0)
				<div class="alert alert-danger" role="alert">
					{{ HTML::ul($errors->all()) }}	
				</div>
			@endif
			{{ Form::open(array("action" => "ComercializadoraController@store", 'files'=>true, 'method' => 'post'))}}
				<div class="row">
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre') }}
						{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
					</div>
					<div class="form-group">
						{{ Form::label('direccion', 'Direccion') }}
						{{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control', 'placeholder' => 'Direccion')) }}
					</div>
					<div class="form-group">
						{{ Form::label('estado', 'Estado') }}
						{{ Form::text('estado', Input::old('estado'), array('class' => 'form-control', 'placeholder' => 'Estado')) }}
					</div>
					<div class="form-group">
						{{ Form::label('ciudad', 'Ciudad') }}
						{{ Form::text('ciudad', Input::old('ciudad'), array('class' => 'form-control', 'placeholder' => 'Ciudad')) }}
					</div>
					<div class="form-group">
						{{ Form::label('telefono', 'Telefono') }}
						{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control', 'placeholder' => 'Teléfono')) }}
					</div>
					<div class="form-group">
						{{ Form::label('logo', 'Logo') }}
						{{ Form::file('logo') }}
					</div>
					<div class="form-group">
						{{ Form::label('url_compra', 'Enlace para compra directa') }}
						{{ Form::text('url_compra', Input::old('url_compra'), array('class' => 'form-control', 'placeholder' => 'Enlace para compra directa')) }}
					</div>
					{{ Form::hidden('lat', '',array('id' => 'lat')) }}
					{{ Form::hidden('log', '',array('id' => 'log')) }}
					{{ Form::submit('Guardar comercializadora', array('class' => 'btn btn-comprar pull-right'))}}
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-6" id="mapaComercializadora"></div>	
	</div>
@stop