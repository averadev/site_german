	<!-- F O O T E R -->
	<footer class="page-footer darker">
	<?php $data = Component::footer();  ?>
		<div class="container" style="margin-top: 40px;">
			<div class="row">
				<div class="col l4 s12">
					<ul class="footer-info" >
						<li><a href="{{ url('/') }}">INICIO</a></li>
						<li><a href="{{ url('/subasta') }}">OBRA EN VENTA</a></li>
						<li><a href="{{ url('servicios/monumental') }}">OBRAS ESPECIALES</a></li>
						<li><a target="_blank" href="{{ url('/blog/es') }}">BLOG</a></li>
						<li><a href="{{ url('/german') }}">GERMAN ARZATE</a></li>
						<li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
						<li style="margin-top: 1em;">{{$data->sociales_texto}}
						<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><img class="social-button" alt="facebook" id="goface"  src="{{ URL::asset('media/img/home/'.$data->facebook_img.'') }}" alt="{{$data->facebook_img_alt}}" ></a> 
						<a href="https://www.instagram.com/germanarzatesculptor/" target="_blank"><img class="social-button" alt="instagram" id="goinsta" src="{{ URL::asset('media/img/home/'.$data->instagram_img.'') }}" alt="{{$data->instagram_img_alt}}"  ></a> </li>			
					</ul>
				</div>
				<div class="col l4 s12">
					<div class="row">
						<div class="col s12">
							<p style="margin-bottom: 1em; font-size: 14px; letter-spacing: 1px;" class="footer-color"> ¡INSCRÍBETE AL NEWSLETTER! </p>
						</div>
						<form class="myform col s11 l9 center" id="newsletter_form">
							<span id="newslettererror" class="hide" > Porfavor completa todos los campos.</span>											
							<input class="my-input" id="my-name-letter" name="my-name-letter" required type="text" placeholder="Nombre Completo">
							<input class="my-input" id="my-email-letter" name="my-email-letter" required type="text" placeholder="Correo Electronico">
							<div id="progressLetter" class="progress hide"><div class="indeterminate"></div></div>
							<a id="newsletterSend" style="font-size: 0.8rem; font-weight: bold; letter-spacing: 1px;  " class="waves-effect footer-color white-border grey darken-3 waves-light btn">INSCRIBIRME</a>
						</form>
					</div>
				</div>
				<div class="col l4 s12">
					<ul class="adress-info">
						<img style="width: 7em; margin-bottom: 20px;" src="{{ URL::asset('media/img/home/'.$data->footer_logo.'') }}" alt="{{$data->footer_logo_alt}}">
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
	<div id="lettermodal" class="modal border-radius-10">
		<div class="notification-msg">
			<h4 style="text-align: center;">Gracias por suscribirte.</h4>
			<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;">A partir de ahora te encuentras inscrito en nuestra lista de noticias.</p>
			<h5 style="text-align: center;">¡Muchas gracias!</h5>
		</div>
		<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
			<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
		</div>
	</div>		
	<!--  Scripts-->

	<script src="{{ URL::asset('vendor/plugins/materialize.min.js') }} "></script>
	<script src="{{ URL::asset('vendor/plugins/jquery.validate.min.js') }} "></script>
	<script src="{{ URL::asset('js/newsletter.js') }} "></script>
	<script type="text/javascript">
	$('.button-collapse').sideNav({/*materializecss nav*/
		menuWidth: 300, // Default is 300
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		draggable: true // Choose whether you can drag to open on touch screens
	});		
	jQuery.validator.addMethod("valid_email", function(value, element) {
	  // allow any non-whitespace characters as the host part
	  return this.optional( element ) || /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i.test( value );
	}, 'Please enter a valid email address.');
	</script>
