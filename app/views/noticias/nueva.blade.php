@extends('admin.dashboard')

@section('controller')
	<div class="container">
		<h2>Nueva noticia</h2>
		<hr>
		@if(sizeof($errors) > 0)
			<div class="alert alert-danger" role="alert">
				{{ HTML::ul($errors->all())}}
			</div>
		@endif
		{{ Form::open(array("action" => "NoticiaController@store")) }}
			<div class="form-group">
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
			</div>
			<div class="form-group">
				{{ Form::label('url_noticia', 'Enlace de la noticia') }}
				{{ Form::text('url_noticia', Input::old('url_noticia'), array('class' => 'form-control', 'placeholder' => 'Enlace de la noticia')) }}
			</div>
			<div class="form-group">
				{{ Form::label('logo', 'Logo') }}
				{{ Form::file('logo') }}
			</div>
			{{ Form::submit('Guardar noticia', array('class' => 'btn btn-comprar pull-right')) }}
		{{ Form::close() }}
	</div>
@stop