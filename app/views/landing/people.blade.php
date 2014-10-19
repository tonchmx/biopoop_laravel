<div class="gente" id="gente">
	<div class="medios">
		<div class="container">
			<h2>Biopoop en los medios</h2>
			<div class="row">
			  <div class="col-xs-12 col-sm-6">
			  	<div class="video-container" style="margin-bottom:10px;">
			  		<iframe width="560" height="315" src="//www.youtube.com/embed/alC8tT5JwHs" frameborder="0" allowfullscreen></iframe>
			  	</div>
			  </div>
			  <div class="col-xs-12 col-sm-6" id="notasPeriodisticas">
			  </div>
			</div>
		</div>
	</div>
	<div class="comentarios">
		<div class="container">
			<h3>¿Qué dice la gente?</h3>
			<div class="visible-sm visible-xs">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quae eius doloribus earum voluptatem reiciendis nesciunt, maxime vel, commodi doloremque, corporis repellat quaerat libero sit suscipit possimus cum ea similique?</p>
			</div>
			<div id="twitter">
				
			</div>
			<div class="hidden-sm hidden-xs">
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
			
		</div>
		<div class="sponsors">
			<div class="container">
				<h3>Ellos confían en nosotros</h3>
				<div id="sponsors"></div>	
			</div>
		</div>
		<div class="instagram">
			<div class="container">
				<h3>Algunos de nuestros felices clientes</h3>
				@foreach($fotos->data as $foto)
					<a class="fancybox" rel="group" title="Foto por: <a href='{{$foto->link}}' target='_blank'>{{$foto->user->full_name}}</a>" href="{{$foto->images->standard_resolution->url}}"><img src="{{ $foto->images->thumbnail->url }}" alt="" /></a>
				@endforeach
				<p>¡Usa el hashtag #biopoop en instagram para aparecer aquí!</p>
			</div>
			
		</div>
		
	</div>
</div>