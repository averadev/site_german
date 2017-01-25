@extends('templates.main')
@section('content')
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">   
					<ul class="tabs black-tabs">
						<li class="tab"><a href="#tab1">DISTINCIÓN</a></li>
						<li class="tab"><a href="#tab2">CATÁLOGO</a></li>
						<li class="tab"><a href="#tab3">PERSONALIZADAS</a></li>
						<li class="tab"><a href="#tab4">LA PIEZA CLAVE</a></li>
					</ul>
				</div>				
				<div id="tab3" class="col s12">Test 3</div>
				<div id="tab4" class="col s12">Test 4</div>
			</div>
		</div>
	</div>
	<div id="tab1" >
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
				<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
					<div class="row center">
						<h3 style="margin-top: 100px; " class="header col s12 light">Esculturas <br> para interiores</h3>
					</div>
					<div class="row center">
						<a class="waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>
					<br><br>
				</div>
			</div>
			<div style="height: 300px; " class="parallax"><img src="../media/img/interiores/intbanner.png" alt="banner"></div>
		</div>
		<div class="container" >
			<div class="section" >
				<div class="row">
					<div class="col s12">
						<p class="center-align par-title max-light">DISTINCIÓN</p>
					</div>
					<div class="col l6 m10 s12 offset-l3 offset-m1">
						<p style="font-size: 1.2em; " class="center-align light med-lineheight " >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					</div>
					<div class="hide-on-med-and-down" style="position: relative; padding-bottom: 20em; ">
						<img style="width: 23.5em; position: absolute; top:-22.5em; left:0em; z-index: 100; " src="../media/img/interiores/intpic1.png" alt="escultura1">
					</div>
					<div class="hide-on-large-only">
						<img style="width: 30%; margin-left: 35%; margin-top: 5%;" src="../media/img/interiores/intpic1.png" alt="escultura1">
					</div>					
				</div>
				<div class="row" >
					<div class="col l10 m12 s12 offset-l1 ">
						<div class="row no-margin-bottom"> 
							<div class="col s12 l7">
								<h5>
									Esculturas exclusivas te esperan en nuestro catálogo para decorar aquellos espacios especiales.
								</h5>
							</div>
						</div>					
						<div class="row no-margin-bottom">
							<div class="col s12 l4">
								<p style="font-size: 1em;" class="light med-lineheight">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
								<a class="small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 36%;">
							<img style="width: 60%; position: absolute; top:-14em; right:0em; z-index: 100; " src="../media/img/interiores/intpic2.png" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/intpic2.png" alt="escultura1">
						</div>

						<div class="right">
							<div class="col s12 l9 right">
								<h5 class="right-align">
									Podrás personalizar las escultas y adaptarlas perfectamente al entorno que necesites.
								</h5>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em;" class="right-align light med-lineheight">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
								<a class="small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 70%;">
								<img style="width: 88%; position: absolute; top:9em; left:-10em; z-index: 100; " src="../media/img/interiores/intpic3.png" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/intpic3.png" alt="escultura1">
							</div>													
						</div>

						<div class="row no-margin-bottom"> 
							<div class="col s12 l7">
								<h5>
									German será la pieza clave que te guiará durante todo el proceso.
								</h5>
							</div>
						</div>					
						<div class="row no-margin-bottom">
							<div class="col s12 l4">
								<p style="font-size: 1em;" class="light med-lineheight">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
								<a class="small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 33%;">
							<img style="width: 65%; position: absolute; top:-16.5em; right:0em; z-index: 100; " src="../media/img/interiores/intpic4.png" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/intpic4.png" alt="escultura1">
						</div>						

					</div>
				</div>			
			</div>
		</div>
		<div style="background-image:url('../media/img/interiores/intbgform.png')" class="bg-monumental-form">
			<div class="container" >
				<div class="section" >
					<div class="row">
						<div class="col s12 center">
							<h3 style="padding-top: 13vw; padding-bottom: 12vw; " class="header white-text col s12 light">Armonía</h3>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12 l6 offset-l3 bg-white">	
							<p style="margin-top: 2.4vw; margin-bottom: 2.4vw; " class="size45  center-align ">
								Crea y diseña el ambiente perfecto.
							</p>
							<p class="med-lineheight" style="padding-left: 4vw; padding-right: 3vw; margin-top: 2.4vw; margin-bottom: 2.4vw  ">
								No dejes escapar la oportunidad de materializar tu escencia a travéz de la visión de Germann Arzate.
							</p>
							<form class="whiteform col s12 m12 l10 offset-l1" data-abide id="mailform">
							
								<div data-abide-error class="alert callout" style="display: none;">
									<p><i class="fi-alert"></i> Porfavor completa todos los campos.</p>
								</div>
								<div class="success callout" style="display: none;">
									<p><i class="fi-success"></i> Mensaje enviado.</p>
								</div>
								<input id="myname" required type="text" placeholder="Nombre Completo">
								<input id="myemail" required type="text" placeholder="Correo electronico">
								<input id="myemail" required type="text" placeholder="Compañia / Empresa">
								<input id="myemail" required type="text" placeholder="Día para la cita">
									<textarea  cols="100" style="height: 100px" placeholder="Comentarios" ></textarea>							
								<button  class="waves-effect green right med-button light btn">HACER CITA</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
<script src="../js/serviciosextra.js"></script>
@stop