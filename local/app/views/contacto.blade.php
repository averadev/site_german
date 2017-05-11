@extends('templates.main')
@section('content')

	<!-- Slider -->
	<div id="index-banner" class="parallax-container fontContact">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
			<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
				<div class="row center">
					<p style="margin-top: 10%;" class="header col s12 light ContactT">{{$contact_info->cont_sec1_titulo}}</p>
					<p class="ContactSubT">{{$contact_info->cont_sec1_subtitulo}}</p>
				</div>
				<div class="row center">
				</div>
				<br><br>
			</div>
		</div>
		<div class="parallax"><img src="media/img/contacto/{{$contact_info->cont_sec1_img1}}"></div>
	</div>
	<!-- Slider -->

	<!-- Formulario -->
	<div class="bg_contact" style="background-image: url('media/img/contacto/{{$contact_info->cont_sec2_bg}}');" >
		<div class="section">
			<div class="container row fontContact">
				<div class="col s12 m6 l6">
					<div class="row">
						<img class="algRC" src="media/img/contacto/{{$contact_info->cont_sec2_escult1}}">
					</div>
					<div class="row">
						<p class="algRC">
							E-mail: <a href="mailto:{{strip_tags($contact_info->cont_sec2_email)}}" style="text-decoration: underline;">{{$contact_info->cont_sec2_email}}</a>
						</p>
					</div>
					<div class="row">
						<img class="algRC" src="media/img/contacto/{{$contact_info->cont_sec2_logo}}">
					</div>
				</div>
				<div class="col s12 m6 l6">
					<form id="FormContactUS" action="http://hostyourgeek.com/beta/germanArzate/contacto/contactomail" method="post">
						<input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
						<div class="row">
							<input type="text" id="name" class="txtForm" name="name" required placeholder="NOMBRE COMPLETO" />
						</div>
						<div class="row">
							<input type="text" id="email" class="txtForm" name="email" required placeholder="CORREO ELECTRÓNICO" />
						</div>
						<div class="row">
							<input type="text" id="company" class="txtForm" name="company" required placeholder="COMPAÑÍA" />
						</div>
						<div class="row">
							<input type="text" class="txtForm" name="asuntos" required placeholder="ASUNTO --- ELIGE UNA OPCIÓN" list="asuntos" />
							<datalist id="asuntos">
								<option value="PROYECTO">
								<option value="DISEÑO">
								<option value="CONSULTA">
								<option value="ENTREVISTA">
							</datalist> 
						</div>
						<div class="row">
							<textarea id="comment" class="txtForm" name="comment" rows="8" required placeholder="COMENTARIOS"></textarea>
						</div>
						
						<div class="row">
							<button id="sendBtnContact" class="btn green btnRight gb_noboxshadow" type="submit">ENVIAR</button>
							<!-- <a href="#"  id="sendBtnContact" class="button success btnRight">ENVIAR</a> -->
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
	<!-- Start Modal Proximamente Form -->
	<div id="msgModal" class="modal border-radius-10">
		<div class="notification">
			<h4 style="text-align: center;" id="titleModalMsg"></h4>
			<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
		</div>
		<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
			<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
		</div>
	</div>
	<!-- End Modal Proximamente Form -->
	<!-- Formulario -->


@stop
@section('addJs')
<script src="js/contacto.js"></script>
<script src="js/script.js"></script>
<script src="js/script_contactform.js"></script>
<script src="js/jquery_validate.js"></script>
@stop