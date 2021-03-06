@extends('admin.dashboard')

@section('controller')
		<div class="row">
			<div class="col-sm-10">
				<h2>Comercializadoras</h2>
				<hr>
			</div>
			<div class="col-sm-1" style="margin-top:20px;">
				<a href="{{ URL::action('ComercializadoraController@create') }}" class="btn btn-primario" role="button">Agregar comercializadora</a>	
			</div>
		</div>

		@if(Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		@if(sizeOf($comercializadoras) == 0)
			<div class="alert alert-warning" role="alert">
				<strong>No hay comercializadoras :(</strong> Por qué no empiezas <a href="{{ URL::action('ComercializadoraController@create') }}">agregando una</a>	
			</div>
		@else
			<table class="table table-striped table-hover table-condesed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Ciudad</th>
						<th>Estado</th>
						<th>Teléfono</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($comercializadoras as $key => $comercializadora)
						<tr>
							<td>{{ $comercializadora->nombre }}</td>
							<td>{{ $comercializadora->direccion }}</td>
							<td>{{ $comercializadora->ciudad }}</td>
							<td>{{ $comercializadora->estado }}</td>
							<td>{{ $comercializadora->telefono}}</td>
							<td>
								<div class="row acciones">
									<div class="col-xs-1">
										<a href="{{ URL::action('ComercializadoraController@show', array($comercializadora->id))}}"><span class="glyphicon glyphicon-eye-open"></span></a>
									</div>
									<div class="col-xs-1">
										<a href="{{ URL::action('ComercializadoraController@edit', array($comercializadora->id))}}"><span class="glyphicon glyphicon-edit"></span></a>
									</div>
									<div class="col-xs-1">
										{{ Form::open(array('url' => '/admin/comercializadoras/' . $comercializadora->id))}}
											{{ Form::hidden('_method', 'DELETE') }}
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
