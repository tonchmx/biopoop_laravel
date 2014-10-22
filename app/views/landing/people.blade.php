<div class="gente" id="gente">
	<div class="medios">
		<div class="container">
			<h2>biopoop® en los medios</h2>
		  	<div class="col-xs-12" id="video">
		  		<div class="video-container" style="margin-bottom:10px;">
		  			<iframe width="560" height="315" src="//www.youtube.com/embed/alC8tT5JwHs" frameborder="0" allowfullscreen></iframe>
	  			</div>
  			</div>
		</div>
	</div>
	<div class="comentarios">
		<div class="container">
			<h3>¿Qué dice la gente?</h3>
			<!-- Start of GetKudos Inline Script -->
			<div class="getkudos-inline" data-site-name="biopoop" data-layout="inline"></div>

			<script>
			(function(w,t,gk,d,s,fs){if(w[gk])return;d=w.document;w[gk]=function(){
			(w[gk]._=w[gk]._||[]).push(arguments)};s=d.createElement(t);s.async=!0;
			s.src='//static.getkudos.me/widget.js';fs=d.getElementsByTagName(t)[0];
			fs.parentNode.insertBefore(s,fs)})(window,'script','getkudos');

			getkudos('parse');
			</script>
			<!-- End of GetKudos Inline Script -->
			
		</div>
		<div class="sponsors" style="display:none;">
			<div class="container">
				<h3>Ellos confían en nosotros</h3>
				<div id="sponsors"></div>	
			</div>
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