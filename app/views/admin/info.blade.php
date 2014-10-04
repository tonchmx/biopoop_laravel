@extends('admin.dashboard')
@section('controller')
	<div class="container">
		<h1>Resumen general</h1>
		<hr>
		<!-- Comercializadoras -->
		<div class="col-lg-4 col-md-5">
			<div class="panel panel-biopoop">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="fa fa-5x fa-building"></i></div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totalComercializadoras}}</div>
							@if($totalComercializadoras == 1)
								<div>comercializadora</div>
							@else
								<div>comercializadoras</div>
							@endif
						</div>
					</div>
				</div>
				<a href="{{ URL::action('ComercializadoraController@index')}}">
					<div class="panel-footer">
						<span class="pull-left">Ver detalle</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<!-- Noticias -->
		<div class="col-lg-4 col-md-5">
			<div class="panel panel-biopoop">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="fa fa-5x fa-newspaper-o"></i></div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totalNoticias}}</div>
							@if($totalNoticias == 1)
								<div>noticia</div>
							@else
								<div>noticias</div>
							@endif
							
						</div>
					</div>
				</div>
				<a href="{{ URL::action('NoticiaController@index')}}">
					<div class="panel-footer">
						<span class="pull-left">Agregar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		
		<!-- Sponsors -->
		<div class="col-lg-4 col-md-5">
			<div class="panel panel-biopoop">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="fa fa-5x fa-angellist"></i></div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totalSponsors}}</div>
							@if($totalSponsors == 1)
								<div>sponsor</div>
							@else
								<div>sponsors</div>
							@endif
						</div>
					</div>
				</div>
				<a href="{{ URL::action('SponsorController@index') }}">
					<div class="panel-footer">
						<span class="pull-left">Agregar</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
@stop