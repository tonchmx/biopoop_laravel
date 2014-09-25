@extends('layout')
@section('opciones')
	@include('includes.opciones')
@stop

@section('content')

<div class="jumbotron">
		<div class="container home">
			<div class="row">
				<div class="col-xs-12 col-sm-6 producto">
					<img src="http://placehold.it/400x600&text=producto" class="img-responsive" alt="...">
				</div>
				<div class="col-xs-12 col-sm-6 info">
					<h1>Bolsa de papel ecológica para deposito de heces caninas</h1>
					<div class="row">
						<a href="#comprar" class="btn btn-comprar btn-lg col-xs-5" role="button">
							Comprar
						</a>
						<span class="col-xs-2"></span>
						<a href="#como" class="btn btn-descubre btn-lg col-xs-5" role="button">
							Descubre
						</a>		
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="como" id="como">
		<div class="container">
			<p>Biopoop promueve la limpieza del medio ambiente, a través de una bolsa de papel ecológica para deposito de heces caninas</p>
			<h2>¿Cómo?</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<img src="img/step1.jpg" class="img-responsive" alt="">
					<h3>Espera</h3>
				</div>
				<div class="col-xs-12 col-sm-3">
					<img src="img/step2.jpg" class="img-responsive" alt="">
					<h3>Acomoda</h3>
				</div>
				<div class="col-xs-12 col-sm-3">
					<img src="img/step3.jpg" class="img-responsive" alt="">
					<h3>Levanta</h3>
				</div>
				<div class="col-xs-12 col-sm-3">
					<img src="img/step4.jpg" class="img-responsive" alt="">
					<h3>Sigue</h3>
				</div>
			</div>
		</div>
	</div>

	<div class="gente" id="gente">
		<div class="comentarios">
			<div class="container">
				<h2>¿Qué dice la gente</h2>
				<article class="col-xs-12 col-sm-4">
					<img class="img-circle"src="http://placehold.it/150x150&text=foto+persona">
					<p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</i></p>
					<strong>Someone famous</strong>
				</article>
				<article class="col-xs-12 col-sm-4">
					<img class="img-circle"src="http://placehold.it/150x150&text=foto+persona">
					<p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</i></p>
					<strong>Someone famous</strong>
				</article>
				<article class="col-xs-12 col-sm-4">
					<img class="img-circle"src="http://placehold.it/150x150&text=foto+persona">
					<p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</i></p>
					<strong>Someone famous</strong>
				</article>
			</div>
			<div class="sponsors">
				<div class="container">
					<h3>Ellos confían en nosotros</h3>
					<img src="http://placehold.it/150x40&text=sponsor">	
					<img src="http://placehold.it/150x40&text=sponsor">	
					<img src="http://placehold.it/150x40&text=sponsor">	
					<img src="http://placehold.it/150x40&text=sponsor">	
				</div>
			</div>
		</div>
	</div>

	<div class="comprar" id="comprar">
		<div class="container">
			<h2>Comprar</h2>
			<div class="row">
				<span class="col-sm-1"></span>
				<div class="col-xs-12 col-sm-3">
					<table class="col-xs-12 table">
						<tr class="p1"><td><h3>Paseo corto</h3></td></tr>
						<tr><td>$99.99</td></tr>
						<tr><td>10 bolsas</td></tr>
						<tr><td>¡Sticker de regalo!</td></tr>
						<tr class="btn-comprar"><td><h3>Comprar</h3></td></tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-4">
					<table class="col-xs-12 table">
						<tr class="p2"><td><h3>Paseo largo</h3></td></tr>
						<tr><td>$199.99</td></tr>
						<tr><td>25 bolsas</td></tr>
						<tr><td>¡Playera de regalo!</td></tr>
						<tr class="btn-comprar"><td><h3>Comprar</h3></td></tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-3">
					<table class="col-xs-12 table">
						<tr class="p1"><td><h3>¡Ármalo!</h3></td></tr>
						<tr><td>$??.??</td></tr>
						<tr><td><input type="number" placeholder="26"> bolsas</td></tr>
						<tr><td>¡Regalo sorpresa!</td></tr>
						<tr class="btn-comprar"><td><h3>Comprar</h3></td></tr>
					</table>
				</div>
				<span class="col-sm-1"></span>
			</div>
		</div>
	</div>

	<div class="contacto" id="contacto">
		<div class="container">
			<h2>Contáctanos</h2>
			<div class="row">
				<div class="col-sx-12 col-sm-6">
					<form role="form">
						<input class="form-control" type="text" placeholder="Nombre">
						<input class="form-control" type="email" placeholder="Email">
						<textarea class="form-control" rows="3"></textarea>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-envelope"></span>
						</button>
					</form>
				</div>
				<div class="col-sx-12 col-sm-6">
					<h3>¡Somos sociables!</h3>
					<dl class="dl-horizontal">
						<p><span class="glyphicon glyphicon-envelope"></span> /biopoopmx</p>
						<p><span class="glyphicon glyphicon-envelope"></span> /biopoopmx</p>
						<p><span class="glyphicon glyphicon-envelope"></span> /biopoopmx</p>
					</dl>
				</div>
			</div>
		</div>
	</div>

	
	
@stop