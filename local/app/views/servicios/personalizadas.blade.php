@extends('templates.main')
@section('content')
<style>
    .parallax-container {
      height: 420px;
    }
</style>
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<ul class="tabs black-tabs">
						<li class="tab"><a href="#tab1">MOMENTO ÚNICO</a></li>
						<li class="tab"><a href="#tab2">ENTREVISTA GERMAN</a></li>
						<li class="tab"><a href="#tab3">LLUVIA DE IDEAS</a></li>
						<li class="tab"><a href="#tab4">MATERELIAZANDO SUEÑOS</a></li>
						<li class="tab"><a href="#tab5">COMENTARIOS </a></li>
						<li class="tab"><a href="#tab6">INMORTALIDAD</a></li>
					</ul>
				</div>				
				<div id="tab3" class="col s12">Test 3</div>
				<div id="tab4" class="col s12">Test 4</div>
				<div id="tab5" class="col s12">Test 5</div>
				<div id="tab6" class="col s12">Test 6</div>
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
						<h3 style="margin-top: 3em; " class="header col s12 light">Esculturas Personalizadas</h3>
					</div>
					<div class="row center">
						<a class="waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>
					<br><br>
				</div>
			</div>
			<div style="height: 300px; " class="parallax"><img src="../media/img/personalizadas/perbanner.png" alt="banner"></div>
		</div>
		<div class="container" >
			<div class="section" >
				<div style="margin-top: 1%; margin-bottom: 9%;" class="row">
					<div class="col s12">
						<p class="center-align par-title max-light">MOMENTO ÚNICO</p>
					</div>
					<div class="col l6 m10 s12 offset-l3 offset-m1">
						<p style="font-size: 1.2em; " class="center-align light med-lineheight " >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					</div>					
				</div>
				<div class="row" >
					<div class="col l10 m12 s12 offset-l1 ">
						<div class="right">
							<div class="col s12 l9 right">
								<h5 class="right-align">
									Una exclusiva experiencia al lado de German mientras compartes tu escencia y tus ideales
								</h5>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em;" class="right-align light med-lineheight">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
								<a class="small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 65%;">
							<img style="width: 65%; position: absolute; top:5em; left:-3em; z-index: 100; " src="../media/img/personalizadas/perpic1.png" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/perpic1.png" alt="escultura1">
						</div>		
						<div class="row no-margin-bottom"> 
							<div class="col s12 l7">
								<h5>
									Pódras inmortalizar tus sueños, materializados en una única escultura.
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
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 28%;">
							<img style="width: 50%; position: absolute; top:-12.5em; right:0em; z-index: 100; " src="../media/img/personalizadas/perpic2.png" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/perpic2.png" alt="escultura1">
						</div>												
						<div class="right">
							<div class="col s12 l9 right">
								<h5 class="right-align">
									Una escultura única que verá la luz a travéz de los ojos de German.
								</h5>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em;" class="right-align light med-lineheight">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
								<a class="small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 40em;">
								<img style="width: 70%; position: absolute; top:6em; left:-3em; z-index: 100; " src="../media/img/personalizadas/perpic3.png" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/perpic3.png" alt="escultura1">
							</div>													
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div style="background-image:url('../media/img/personalizadas/perbgform.png')" class="bg-monumental-form">
			<div class="container" >
				<div class="section" >
					<div style="margin-top: 32vw;" class="row">
						<div style="background-color: transparent;" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">	
							<p style="margin-top: 2.4vw; margin-bottom: 2.4vw; color: white; " class="size45 center-align ">
								Tu escencencia capturada en un momento para siempre
							</p>
						</div>
						<div style="background-color: black; padding-bottom: 3%;" class="col s12 m12 l6 offset-l3">	
							<p class="med-lineheight" style="padding-left: 4vw; padding-right: 3vw; margin-top: 2.4vw; margin-bottom: 2.4vw; color: white;  ">
								No dejes escapar la oportunidad de materializar tu escencia a travéz de la visión de Germann Arzate.
							</p>
							<form class=" col s12 m12 l10 offset-l1">
								<input id="myname"  class="black-input" required type="text" placeholder="Nombre Completo">
								<input id="myemail" class="black-input" required type="text" placeholder="Correo electronico">
								<input id="myemail" class="black-input" required type="text" placeholder="Compañia / Empresa">
								<input id="myemail" class="black-input" required type="text" placeholder="Día para la cita">
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