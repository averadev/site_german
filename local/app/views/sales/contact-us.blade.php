@extends("templates.main_digital")
@section("content")
<div class="fullpage" style="position: relative; background: rgb(25,30,36) no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<article class="col s12 m12 l6 hide-on-small-only hide-on-med-only" style="background: rgb(25,30,36) url('../media/img/ventas/bg-contact.jpg') no-repeat; background-position: 50% 50%; background-size: cover; min-height: 100vh; height: 100%;">
		</article>
		<article class="col s12 m12 l6" style="background: rgb(25,30,36); min-height: 100vh; height: 100%;">
			<div class="row">
				<div class="col s12 m12 l12 fontCrimson">
					<div style="margin-top: 40px;"></div>
					<p class="ga-title-name-contact-us center-align">Contacto</p>
				</div>
			</div>
			<!-- begin form contact -->
			<div class="row">
				<div class="col s12 m12 l1"></div>
				<div class="col s12 m12 l10 fontCrimson">
					@if (Session::has('success'))
						<div class="alert alert-info center-align">{{ Session::get('success') }}</div>
					@endif
					<form id="FormContact" class="" action="{{ URL::to('ventas/contact/sendForm') }}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" id="name" class="contact-form" name="name" placeholder="Nombre completo" required="true">
						<input type="email" id="email" class="contact-form" name="email" placeholder="Email" required="true">
						<input type="text" id="subject" class="contact-form" name="subject" placeholder="Asunto" required="true">
						<textarea name="comment" id="message" class="contact-form materialize-textarea" cols="30" rows="10" placeholder="Mensaje" required="true" style="height: 100px;"></textarea>
						<div style="margin-top: 40px;"></div>
						<div class="center-align">
							<input type="button" id="BtnFormContact" class="btn ba-radius50 ga-melon ga-bold" value="ENVIAR MENSAJE">
						</div>
					</form>
				</div>
				<div class="col s12 m12 l1"></div>
			</div>
			<!-- end form contact -->
			<div style="margin-top: 40px;"></div>
			<div class="row">
				<div class="col s12 m12 l3"></div>
				<div class="col s12 m12 l6 fontCrimson">
					<div class="center-align">
						<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank" style="color:#fff; margin-right: 25px;"><i class="fa fa-facebook" style="font-size: 24px; margin-right: 25px;"></i> Facebook</a>
						<a href="https://twitter.com/germanarzate" target="_blank" style="color: #fff;"><i class="fa fa-twitter" style="font-size: 24px; margin-right: 25px;"></i> Twitter</a>
					</div>
				</div>
				<div class="col s12 m12 l3"></div>
			</div>
			<div style="position: absolute; bottom: 0px; right: 0px; background: #12161a; text-align: center; width: 50%;">
				<div class="col s12">
					<div class="main-nav-link">
						<div class="box_logo">
							<a href="{{ URL::to('/ventas/home') }}"><img class="img-logo-min logomarginright" alt="Logo German Arzate" src="{{ URL::asset('media/img/german-logo-v2.svg') }}" width="180"></a>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>
<div id="msgModal" class="modal border-radius-10 msgModal">
	<div class="notification">
		<h4 style="text-align: center;" id="titleModalMsg"></h4>
		<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
	</div>
	<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
		<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
	</div>
</div>
@stop