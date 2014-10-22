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
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
		            <li><a href="/admin/dashboard">Inicio</a></li>
	          	</ul>
				<ul class="nav nav-sidebar">
		            <li><a href="{{ URL::action('ComercializadoraController@index') }}">Comercializadoras</a></li>
		            <li><a href="{{ URL::action('ComercializadoraController@create') }}">Nueva Comercializadora</a></li>
		        </ul>
		        <ul class="nav nav-sidebar">
		            <li><a href="{{ URL::action('NoticiaController@index') }}">Noticias</a></li>
		            <li><a href="{{ URL::action('NoticiaController@create') }}">Nueva Noticia</a></li>
  	            </ul>
  	            <ul class="nav nav-sidebar">
  	            	<li><a href="{{ URL::action('SponsorController@index') }}">Sponsors</a></li>
  	            	<li><a href="{{ URL::action('SponsorController@create') }}">Nuevo Sponsor</a></li>
  	            </ul>
			</div>
			<div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-2 main">
				@yield('controller')
			</div>
		</div>
		
	</div>
@stop
