@extends('admin.dashboard')

@section('controller')
	<div class="row">
		<div class="col-sm-10">
			<h2>Sponsors</h2>
			<hr>
		</div>
		<div class="col-sm-1" style="margin-top:20px">
			<a href="{{ URL::action('SponsorController@create') }}" class="btn btn-primario" role="button">Agregar sponsor</a>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	@if(sizeof($sponsors) == 0)
		<div class="alert alert-warning" role="alert">
			<strong>No hay sponsors :(</strong> Por qué no empiezas <a href="{{ URl::action('SponsorController@create') }}">agregando uno</a>
		</div>
	@else
		<table class="table table-striped table-hover table-condesed">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sponsors as $key => $sponsor)
				<tr>
					<td>{{ $sponsor->nombre }}</td>
					<td>
						<div class="row acciones">
							<div class="col-xs-1">
								<a href="{{ URL::action('SponsorController@show', array($sponsor->id)) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
							</div>
							<div class="col-xs-1">
								<a href="{{ URL::action('SponsorController@edit', array($sponsor->id)) }}"><span class="glyphicon glyphicon-edit"></span></a>
							</div>
							<div class="col-xs-1">
								{{ Form::open(array('url' => '/admin/sponsors/' . $sponsor->id)) }}
									{{Form::hidden('_method', 'DELETE') }}
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