@extends('admin.dashboard');

@section('controller')
	<div class="container">
		<h2>Editar noticia</h2>
		<hr>
		@if(sizeof($errors) > 0)
			<div class="alert alert-danger" role="alert">
				{{ HTML::ul($errors->all())}}
			</div>
		@endif
		{{ Form::model($noticia, array('action' => array('NoticiaController@update', $noticia->id), 'method' => 'PUT')) }}
			<div class="form-group">
				{{ Form::label('nombre', 'Nombre') }}
				{{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
			</div>
			<div class="form-group">
				{{ Form::label('url_noticia', 'Enlace de la noticia') }}
				{{ Form::text('url_noticia', null, array('class' => 'form-control', 'placeholder' => 'Enlace de la noticia')) }}
			</div>
			<div class="form-group">
				{{ Form::label('logo', 'Logo') }}
				{{ Form::file('logo') }}
			</div>
			{{ Form::submit('Actualizar noticia', array('class' => 'btn btn-comprar pull-right')) }}
		{{ Form::close()}}
	</div>
@stop