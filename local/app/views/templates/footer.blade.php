	<!-- F O O T E R -->
	<footer class="page-footer darker">
	<?php $data = Component::footer();  ?>
		<div class="container" style="margin-top: 40px;">
			<div class="row">
				<div class="col l4 s12">
					<ul class="footer-info" >
						<li><a href="{{ url('/') }}">INICIO</a></li>
						<li><a href="{{ url('/subasta') }}">SUBASTA</a></li>
						<li><a href="{{ url('servicios/monumental') }}">OBRAS ESPECIALES</a></li>
						<li><a href="#">BLOG</a></li>
						<li><a href="{{ url('/german') }}">GERMAN ARZATE</a></li>
						<li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
						<li style="margin-top: 1em;">{{$data->sociales_texto}}
						<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><img class="social-button" alt="facebook" id="goface"  src="{{ URL::asset('media/img/home/'.$data->facebook_img.'') }}" ></a> 
						<a href="https://www.instagram.com/germanarzatesculptor/" target="_blank"><img class="social-button" alt="instagram" id="goinsta" src="{{ URL::asset('media/img/home/'.$data->instagram_img.'') }}" ></a> </li>			
					</ul>
				</div>
				<div class="col l4 s12">
					<div class="row">
						<div class="col s12">
							<p style="margin-bottom: 1em; font-size: 14px; letter-spacing: 1px;" class="footer-color"> ¡INSCRÍBETE AL NEWSLETTER! </p>
						</div>
						<form class="myform col s11 l9 center" data-abide id="mailform">
						
							<div data-abide-error class="alert callout" style="display: none;">
								<p><i class="fi-alert"></i> Porfavor completa todos los campos.</p>
							</div>
							<div class="success callout" style="display: none;">
								<p><i class="fi-success"></i> Mensaje enviado.</p>
							</div>						
							<input class="my-input" id="myname" required type="text" placeholder="Nombre Completo">
							<input class="my-input" id="myemail" pattern="valemail" required type="text" placeholder="Correo electrónico">
							<button style="font-size: 0.8rem; font-weight: bold; letter-spacing: 1px;  " class="waves-effect footer-color white-border grey darken-3 waves-light btn">INSCRIBIRME</button>
						</form>	

					</div>
				</div>
				<div class="col l4 s12">
					<ul class="adress-info">
						<img style="width: 7em; margin-bottom: 20px;" src="{{ URL::asset('media/img/home/'.$data->footer_logo.'') }}" alt="logo footer">
						<li>E-mail: <a href="mailto:{{strip_tags($data->footer_email)}}" style="text-decoration: underline;">{{$data->footer_email}}</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container footer-color center" style="font-size: 0.8rem;">
				{{$data->copyright_txt}}
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
