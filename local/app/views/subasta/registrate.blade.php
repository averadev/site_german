@extends('templates.main')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/app/registrate.css') }}">
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">			
			<div class="row gb_mrg_1 no-margin-bottom">
				<div class="col s12">
					<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
				</div>
			</div>			
		</div>
	</div>
	<!-- end submenu fixed -->
	<div class="hide-on-small-only">
		<br>
	</div>	

	<!-- Start Coming Soon -->
	<article id="tab7" class="scrollspy">
		<div class="hide-on-large-only">
			<br>
		</div>
		<div class="bg_signin">
			<div class="container div-user">
				<div class="row no-margin-bottom">
					<div style="background-image: url('../media/img/subasta/form_signup.png'); background-size: 100% 100%; padding-right:2%; padding-left:2%;" class="col l6 offset-l3 m8 offset-m2 s12">						
						<div style="margin-top: 9rem">
							<p class="titleservices size45  italic center-align hide-on-med-and-down"><b>
								Transmite tu esencia <br>de forma  monumental.
							</b></p>
							<p class="titleservices size4  italic center-align hide-on-large-only"><b>
								Transmite tu esencia de forma monumental.
							</b></p>
							<p style="line-height: 1.3rem;" class="center-align" >Para ofertar, primero permitenos registrar tu usuario:</p>
							<div style="padding-right:3%; padding-left:2%; padding-bottom: 2rem;  ">
								<form id="new_user_form" class="my-form">
									<input id="name" class="border_cs" maxlength="50" required="" name="name" placeholder="USUARIO" type="text">
									<input id="nickname" class="border_cs" maxlength="20" required type="text" name="nickname" placeholder="NICKNAME">
									<input id="email" class="border_cs" maxlength="50" required type="text" name="email" placeholder="CORREO">
									<input id="password" class="border_cs" maxlength="50" required type="password" name="password" placeholder="CONTRASEÑA">
									<input id="password_confirm" class="border_cs" maxlength="50" required type="password" name="password_confirm" placeholder="CONFIRMAR CONTRASEÑA">
									<input id="card_number" class="border_cs" maxlength="16" required type="text" name="card_number" placeholder="N° DE TARJETA">
									<div class="row">
										<div class="col s12 l5">
											<select id="selectCard" name="selectCard" class="browser-default">
												<option value="" disabled selected>TIPO DE TARJETA</option>
												<option value="1">Visa</option>
												<option value="2">Mastercard</option>
											</select>
										</div>
										<div class="col s12 l7">
											<a id="modalcard" class="waves-effect waves-light col s2 l2 green bold600 btn gb_noboxshadow">?</a>
											<p class="text-help left-boder-1px" >¿PORQUE DEBO INTRODUCIR UN NÚMERO DE TARJETA?</p>
										</div>
									</div>
									<div class="col s10 offset-s1 m12 l8 offset-l2">
										<div id="progressdiv" class="progress hide"><div class="indeterminate"></div></div>
										<a id="new-user" style="margin-bottom: 2.5rem; width: 100%;" class="waves-effect waves-light green bold600 btn gb_noboxshadow">ENVIAR</a>										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Modal Proximamente Form -->
		<div id="messageModal" class="modal border-radius-10">
			<div class="notification">
				<h4 style="text-align: center;" id="titleModal"></h4>
				<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmessageModal"></p>
			</div>
			<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
				<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
			</div>
		</div>
		<div id="mailModal" class="modal border-radius-10">
			<div class="notification">
				<p class="titleservices size45 italic center-align "><b>
					¡Correo enviado con exito!
				</b></p>
			<p style="font-size: 1.3rem; line-height: 1.8rem; text-align: center;">Enviamos a tu email un correo, <br> porfavor confirmalo para poder acceder.</p>
			<img style="width: 10%; display: block; margin: 0 auto; margin-bottom: 1rem; " src="../media/img/subasta/mail_icon.png" alt="icono correo">
			</div>
			<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
				<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
			</div>
		</div>
		<!-- End Modal Proximamente Form -->
		<!-- End Coming Soon -->
	</article>
@stop
@section('addJs')
	<script>
		$(document).ready(function(){
			serverdate = new Date(<?php echo time(); ?>*1000);
		});
	</script>
	<script src="{{ URL::asset('vendor/plugins/jquery_date.js') }}"></script>
	<script src="{{ URL::asset('js/registrate.js') }}"></script>
@stop