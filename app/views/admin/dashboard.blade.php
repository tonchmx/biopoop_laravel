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
				            <li class="active"><a href="#">Overview</a></li>
				            <li><a href="#">Reports</a></li>
				            <li><a href="#">Analytics</a></li>
				            <li><a href="#">Export</a></li>
				          </ul>
				          <ul class="nav nav-sidebar">
				            <li><a href="">Nav item</a></li>
				            <li><a href="">Nav item again</a></li>
				            <li><a href="">One more nav</a></li>
				            <li><a href="">Another nav item</a></li>
				            <li><a href="">More navigation</a></li>
				          </ul>
				          <ul class="nav nav-sidebar">
				            <li><a href="">Nav item again</a></li>
				            <li><a href="">One more nav</a></li>
				            <li><a href="">Another nav item</a></li>
				          </ul>
			</div>
			<div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-2">
				@yield('controller')
			</div>
		</div>
		
	</div>
@stop
