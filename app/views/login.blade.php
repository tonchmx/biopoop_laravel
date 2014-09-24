<!doctype html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		{{ Form::open(array('url' => 'login')) }}
			<h1>Login</h1>

			<p>
				{{ $errors->first('username') }}
				{{ $errors->first('password') }}
				{{ Session::get('message') }}
			</p>
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
	</body>
</html>