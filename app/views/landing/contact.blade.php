<div class="contacto" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2>Contáctanos</h2>
				<p>En biopoop® siempre queremos leer tus comentarios, dudas o recomendaciones que nos puedas ofrecer.</p>
				<dl class="dl-horizontal">
					<p><i class="fa fa-facebook"></i> <a href="https://www.facebook.com/BiopoopMx">/BiopoopMx</a></p>
					<p><i class="fa fa-twitter"></i> <a href="https://twitter.com/BiopoopMexico">@BiopoopMexico</a></p>
					<p><i class="fa fa-instagram"></i> <a href="http://instagram.com/biopoop">@biopoop</a></p>
				</dl>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div id="exito" class="alert alert-warning" role="alert" style="display:none">
					<h3>¡Gracias por contactarnos!</h3>
				</div>
				
					<div class="row">
						<div class="form-group col-xs-6 col-sm-6">
							<input type="text" class="form-control" id="contactoNombre" placeholder="Nombre">
							<span style="display:none; color:#a94442;" id="contactoNombreError">Escribe tu nombre</span>
						</div>
						<div class="form-group col-xs-6 col-sm-6">
							<input type="text" class="form-control" id="contactoApellido" placeholder="Apellido">
							<span style="display:none; color:#a94442;" id="contactoApellidoError">Escribe tu apellido</span>
						</div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="contactoEmail" placeholder="Email">
						<span style="display:none; color:#a94442;" id="contactoEmailError">Escribe tu Email</span>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="contactoTelefono" placeholder="Número telefónico">
					</div>
					<div class="form-group">
						<select name="contactoAsunto" id="contactoAsunto" class="form-control">
							<option value="0">Seleccione un asunto...</option>
							<option value="comentarios">Comentarios</option>
							<option value="Sugerencias">Sugerencias</option>
							<option value="Ventas">Ventas</option>
						</select>
						<span style="display:none; color:#a94442;" id="contactoAsuntoError">Selecciona un asunto</span>
					</div>
					<div class="form-group">
						<textarea class="form-control" id="contactoMensaje" cols="30" rows="5" placeholder="Mensaje"></textarea>
						<span style="display:none; color:#a94442;" id="contactoMensajeError">Escribe tu mensaje</span>
					</div>
					<button type="button" id="contactar" class="btn btn-lg btn-comprar pull-right">Enviar</button>
				
			</div>
			
		</div>
	</div>
</div>