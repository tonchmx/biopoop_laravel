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
<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-tittle">Login</h4>
				</div>
				<div class="panel-body">
					{{ Form::open(array('url' => 'login')) }}
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
							{{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Usuario')) }}
						</p>

						<p>
							{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
						</p>

						<p>
							{{ Form::submit('Entrar', array('class' => 'btn btn-comprar btn-lg btn-lock', 'style' => 'width:100%;')) }}
						</p>
					{{ Form::close() }}	
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop