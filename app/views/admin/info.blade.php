@extends('admin.dashboard')
@section('controller')
	<div class="container">
		<h1>Resumen general</h1>
		<hr>
		<div class="row">
			<div class="col-xs-6">
				<h2>{{ $totalNoticias }}</h2>
				@if($totalNoticias == 1)
					<p>noticia</p>
				@else
					<p>noticias</p>
				@endif
			</div>
			<div class="col-xs-6">
				<h2>{{ $totalComercializadoras }}</h2>
				@if($totalComercializadoras == 1)
					<p>comercializadora</p>
				@else
					<p>comercializadoras</p>
				@endif
				
			</div>	
		</div>
	</div>
@stop