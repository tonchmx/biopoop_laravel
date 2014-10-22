@extends('admin.dashboard')
@section('controller')
		<div class="row">
			<div class="col-sm-10">
				<h2>Noticias</h2>	
				<hr>
			</div>
			<div class="col-sm-1" style="margin-top:20px">
				<a href="{{ URL::action('NoticiaController@create') }}" class="btn btn-primario" role="button">Agregar noticia</a>
			</div>
		</div>
		@if(Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		@if(sizeof($noticias) == 0)
			<div class="alert alert-warning" role="alert">
				<strong>No hay noticias :(</strong> Por qué no empiezas <a href="{{ URL::action('NoticiaController@create') }}"> agregando una</a>
			</div>
		@else
			<table class="table table-striped table-hover table-condesed">
				<thead>
					<tr>
						<th>Periódico</th>
						<th>Enlace</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($noticias as $key => $noticia)
					<tr>
						<td>{{ $noticia->nombre }}</td>
						<td>{{ $noticia->url_noticia}}</td>
						<td>
							<div class="row acciones">
								<div class="col-xs-1">
									<a href="{{ URL::action('NoticiaController@show', array($noticia->id)) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
								</div>
								<div class="col-xs-1">
									<a href="{{ URL::action('NoticiaController@edit', array($noticia->id)) }}"><span class="glyphicon glyphicon-edit"></span></a>
								</div>
								<div class="col-xs-1">
									{{ Form::open(array('url' => '/admin/noticias/' . $noticia->id))}}
										{{ Form::hidden('_method', 'DELETE')}}
										<a href="javascript:;" onClick="parentNode.submit();"><span class="glyphicon glyphicon-remove"></span></a>
									{{ Form::close() }}
								</div>
							</div>	
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	

	
@stop