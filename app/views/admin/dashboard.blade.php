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
	The future dashboard
@stop
