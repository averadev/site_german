	<!-- F O O T E R -->
	<footer class="page-footer darker" >
		<div class="container" style="margin-top: 40px;">
			<div class="row">
				<div class="col l4 s12">
					<ul class="footer-info" >
						<li><a href="{{ url('/') }}" >INICIO</a></li>
						<li><a href="{{ url('/subasta') }}" >SUBASTA</a></li>
						<li><a href="{{ url('servicios/monumental') }}" >SERVICIOS EXTRA</a></li>
						<li><a href="#" >NOTAS DE PRENSA</a></li>
						<li><a href="{{ url('/german') }}" >GERMAN ARZATE</a></li>
						<li><a href="{{ url('/contacto') }}" >CONTACTO</a></li>
						<li style="margin-top: 1em;" >SÍGUEME EN: <img class="social-button" alt="facebook" id="goface" src="{{ URL::asset('media/img/home/fb.png') }}"> <img class="social-button" alt="instagram" id="goinsta" src="{{ URL::asset('media/img/home/insta.png') }}"> <img class="social-button" alt="twitter" id="gotwitter" src="{{ URL::asset('media/img/home/twitter.png') }}"> </li>			
					</ul>
				</div>
				<div class="col l4 s12">
					<div class="row">
						<div class="col s12">
							<p style="margin-bottom: 1em; font-size: 14px; letter-spacing: 1px; " class="footer-color"> ¡INSCRÍBETE A MI NEWSLETTER! </p>
						</div>
						<form class="myform col s11 l9 center" data-abide id="mailform">
						
							<div data-abide-error class="alert callout" style="display: none;">
								<p><i class="fi-alert"></i> Porfavor completa todos los campos.</p>
							</div>
							<div class="success callout" style="display: none;">
								<p><i class="fi-success"></i> Mensaje enviado.</p>
							</div>						
							<input class="my-input" id="myname" required type="text" placeholder="Nombre Completo">
							<input class="my-input" id="myemail" pattern="valemail" required type="text" placeholder="Correo electronico">
							<button style="font-size: 0.8rem; font-weight: bold; letter-spacing: 1px;  " class="waves-effect footer-color white-border grey darken-3 waves-light btn">INSCRIBIRME</button>
						</form>	

					</div>
				</div>
				<div class="col l4 s12">
					<ul class="adress-info">
						<img style="width: 7em; margin-bottom: 20px;" src="{{ URL::asset('media/img/home/logoblanco.png') }}" alt="logo footer">
						<li href="#!" >Calle Niebla No.5 S.M.18,</a></li>
						<li href="#!" >77580 Cancún, Q. Roo, México</a></li>
						<li href="#!" >Tel.: 011 521 998 106850</a></li>
						<li href="#!">E-mail: <a href="mailto:art@germanarzate.com">art@germanarzate.com</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container footer-color center" style="font-size: 0.8rem;" >
				Todos los derechos reservados German Arzate c 2015
			</div>
		</div>
	</footer>	
	<!--  Scripts-->

	<script src="{{ URL::asset('js/materialize.js') }} "></script>
	<script src="{{ URL::asset('js/jquery.validate.min.js') }} "></script>	
	<script src="{{ URL::asset('js/main.js') }} "></script>
	<script type="text/javascript">
			jQuery.validator.addMethod("valid_email", function(value, element) {
	  // allow any non-whitespace characters as the host part
	  return this.optional( element ) || /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i.test( value );
	}, 'Please enter a valid email address.');
	</script>
