@extends('layout')
@include('includes.menu')
@section('opciones')
	<div class="collapse navbar-collapse" id="menu">
	<ul class="nav navbar-nav navbar-right">
		<li>{{HTML::link('/logout', 'Logout')}}</a></li>
  	</ul>
</div>
@stop

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h1>{{ $comercializadora->nombre}}</h1>
			<p>{{ $comercializadora->direccion}}, {{$comercializadora->ciudad}}, {{$comercializadora->estado}}</p>
			<p>Teléfono: {{$comercializadora->telefono}}</p>
			<div id="mapaComercializadora"></div>
		</div>
		<input type="hidden" id="lat" value="{{$comercializadora->lat}}">
		<input type="hidden" id="log" value="{{$comercializadora->log}}">
	</div>
	
@stop