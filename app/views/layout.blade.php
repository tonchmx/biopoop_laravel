<!DOCTYPE html>
<html lang="es">
<head>
	@include('includes.head')
</head>
<body>
	
	@include('includes.menu')

	<div class="main">
		@yield('content')
	</div>

	<footer class="footer">
		@include('includes.footer')
	</footer>
</body>
</html>