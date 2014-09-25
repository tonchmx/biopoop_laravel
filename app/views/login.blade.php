@extends('layout')
@include('includes.menu')
@section('content')
<script type="text/javascript">
<!--
 
$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
 
});
//-->
</script>
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>
		@if($errors->first('username') != '' || $errors->first('password') != '')
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<p>{{ $errors->first('username') }}</p>
				<p>{{ $errors->first('password') }}</p>
			</div>
		@endif
		
		@if(Session::get('message') != '')
			@if(Session::get('message') == '¡Hasta luego!')
				<div class="alert alert-success alert-dismissible" role="alert">
			@else
				<div class="alert alert-danger alert-dismissible" role="alert">
			@endif
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				{{ Session::get('message') }}
			</div>			
		@endif

		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>
			{{ Form::submit('Submit!') }}
		</p>
	{{ Form::close() }}
@stop