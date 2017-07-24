@extends('templates.main')
@section('content')
<style type="text/css">
	label.error {
		color: #ff0000 !important;
		margin-bottom: -10px;
	}
</style>
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
		<div class="parallax"><img src="../media/img/contacto/{{$contact_info->cont_sec1_img1}}" alt="{{$contact_info->cont_sec1_img1_alt}}" ></div>
	</div>
	<!-- Slider -->

	<!-- Formulario -->
	<div class="bg_contact" title="{{$contact_info->cont_sec2_bg_alt}}" style="background-image: url('../media/img/contacto/{{$contact_info->cont_sec2_bg}}'); background-size: cover; " >
		<div class="section">
			<div class="container row fontContact">
				<div class="col s12 m6 l6">
					<div class="row">
						<img class="algRC" alt="{{$contact_info->cont_sec2_escult1_alt}}" src="../media/img/contacto/{{$contact_info->cont_sec2_escult1}}">
					</div>
					<div class="row">
						<p class="algRC">
							E-mail: <a href="mailto:{{strip_tags($contact_info->cont_sec2_email)}}" style="text-decoration: underline;">{{$contact_info->cont_sec2_email}}</a>
						</p>
					</div>
					<div class="row">
						<img alt="{{$contact_info->cont_sec2_logo_alt}}" class="algRC" src="../media/img/contacto/{{$contact_info->cont_sec2_logo}}">
					</div>
				</div>
				<div class="col s12 m6 l6">
					<form id="FormContactUS">
						<div class="row">
							<input type="text" id="name" class="txtForm" name="name" required placeholder="NAME" />
						</div>
						<div class="row">
							<input type="text" id="email" class="txtForm" name="email" required placeholder="E-MAIL" />
						</div>
						<div class="row">
							<input type="text" id="company" class="txtForm" name="company" required placeholder="COMPANY" />
						</div>
						<div class="row">
							<select id="asuntos" class="txtForm browser-default" name="asuntos">
								<option value="" disabled selected>SUBJECT</option>
								<option value="1">PROYECT</option>
								<option value="2">DESIGN</option>
								<option value="3">CONSULT</option>
								<option value="4">INTERVIEW</option>
							</select>
						</div>
						<div class="row">
							<textarea id="comment" class="txtForm" name="comment" rows="8" required placeholder="COMMENTS"></textarea>
						</div>
						
						<div class="row">
							<div id="progressdiv" class="progress hide"><div class="indeterminate"></div></div>
							<a id="sendBtnContact" class="btn green btnRight gb_noboxshadow">SEND</a>
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
@stop