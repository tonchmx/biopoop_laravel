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
						<a href="#como" class="btn btn-primario btn-lg col-xs-5" role="button">
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
		<div class="medios">
			<div class="container">
				<h3>Biopoop en los medios</h3>
				<div class="row">
				  
				  <div class="col-xs-12 col-sm-6">
				  	<div class="video-container">
				  		<iframe width="560" height="315" src="//www.youtube.com/embed/alC8tT5JwHs" frameborder="0" allowfullscreen></iframe>	
				  	</div>
				  </div>
				  <div class="col-xs-12 col-sm-1">
				  	<p></p>
				  </div>
				  <div class="col-xs-12 col-sm-5">
				  	<p>
				  		<img class="img-responsive" src="http://placehold.it/560x70&text=nota">
				  	</p>
				  	<p>
				  		<img class="img-responsive" src="http://placehold.it/560x70&text=nota">
				  	</p>
				  	<p>
				  		<img class="img-responsive" src="http://placehold.it/560x70&text=nota">
				  	</p>
				  	<p>
				  		<img class="img-responsive" src="http://placehold.it/560x70&text=nota">
				  	</p>
				  	<p>
				  		<img class="img-responsive" src="http://placehold.it/560x70&text=nota">
				  	</p>
				  </div>
				</div>
			</div>
		</div>
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
	<div id="donde_comprar">
		<div class="container">
			<h2>¿Dónde comprar?</h2>
			<div id="mapa" class="col-xs-12 col-sm-8"></div>	
			<div id="lista" class="col-xs-12 col-sm-4">
				<ul></ul>
				<div>
					<h3>¿No aparece tu ciudad en el mapa?</h3>
					<p>
						Estamos trabajando arduamente para lograr que Biopoop se venda en todas partes. Si tienes algún negocio o quieres ayudarnos vendiendo nuestro producto, porfavor contáctanos.
					</p>
					<a href="#contacto" class="btn btn-primario btn-lg" role="button" id="btn-contacto">
						Contáctanos
					</a>	
				</div>	
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