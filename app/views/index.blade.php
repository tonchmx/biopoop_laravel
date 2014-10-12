@extends('layout')
@section('opciones')
	@include('includes.opciones')
@stop

@section('content')
	@include('landing.splash')
	
	<div class="landing">
		@include('landing.landing')
	</div>

	<div class="footer">
		@include('includes.footer')
	</div>
	
@stop