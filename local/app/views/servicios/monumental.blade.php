@extends('templates.main')
@section('content')
<style type="text/css">
p.headerForm {
  font-size: 4vw;
  line-height: 110%;
  margin: 1.78rem 0 1.424rem 0;
}

</style>
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<ul class="tabs menuFont black-tabs">
						<li class="tab"><a href="#tab1">MOMENTO ÚNICO</a></li>
						<li class="tab"><a href="#tab2">ENTREVISTA GERMAN</a></li>
						<li class="tab"><a href="#tab3">LLUVIA DE IDEAS</a></li>
						<li class="tab"><a href="#tab4">MATERELIAZANDO SUEÑOS</a></li>
						<li class="tab"><a href="#tab5">INMORTALIDAD</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
				<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
					<div class="row center">
						<h3 style="margin-top: 1.8em;" class="titleservices large-spacing header col s12 light">{{$data->mon_banner_title}}</h3>
					</div>
					<div class="row center">
						<a style="margin-top: 3%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>
					<br><br>
				</div>
			</div>
			<div style="height: 300px; " class="parallax"><img src="../media/img/monumental/{{$data->mon_banner_pic}}" alt="banner"></div>
		</div>
			<div id="tab1" class="container" >
				<div class="section" >
					<div class="row">
						<div class="col s12">
							<p class="center-align par-title max-light">{{$data->mon_unico_title}}</p>
						</div>
						<div class="col l6 m10 s12 offset-l3 offset-m1">
							<p style="font-size: 1.2em; " class="center-align light med-lineheight " >{{$data->mon_unico_desc}}</p>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; padding-bottom: 20em; ">
							<img style="width: 23.5em; position: absolute; top:-25em; left:0em; z-index: 100; " src="../media/img/monumental/{{$data->mon_unico_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 30%; margin-left: 35%; margin-top: 5%;" src="../media/img/monumental/{{$data->mon_unico_pic}}" alt="escultura1">
						</div>					
					</div>
				</div>		
			</div>
			<div id="tab2" class="container" >
				<div class="section" >
					<div class="row" >
						<div class="col l10 m12 s12 offset-l1 ">
							<div class="right">
								<div id="section2"  class="col s12 right">
									<p class="titleservices size45 italic right-align"><b>
										{{$data->mon_entrevista_title}}
									</b></p>
								</div>
								<div class="col s12 l4 offset-l8">
									<p style="font-size: 1em; margin-top: 2em;" class="right-align light med-lineheight">
										{{$data->mon_entrevista_desc}}
									</p>
									<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
								</div>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 65%;">
								<img style="width: 65%; position: absolute; top:7.5em; left:-3em; z-index: 100; " src="../media/img/monumental/{{$data->mon_entrevista_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/monumental/{{$data->mon_entrevista_pic}}" alt="escultura1">
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<div id="tab3" class="container" >
				<div class="section" >			
					<div class="row no-margin-bottom"> 
						<div id="section3"  class="col s12">
							<p class="titleservices size45 italic left-align"><b>
								{{$data->mon_lluvia_title}}
							</b></p>
						</div>
					</div>					
					<div class="row no-margin-bottom">
						<div class="col s12 l4">
							<p style="font-size: 1em; margin-top: 2em; " class="light med-lineheight">
								{{$data->mon_lluvia_desc}}
							</p>
							<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
						</div>
					</div>
					<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 33%;">
						<img style="width: 75%; position: absolute; top:-12.5em; right:0em; z-index: 100; " src="../media/img/monumental/{{$data->mon_lluvia_pic}}" alt="escultura1">
					</div>
					<div class="hide-on-large-only">
						<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/monumental/{{$data->mon_lluvia_pic}}" alt="escultura1">
					</div>
				</div>
			</div>
	
			<div id="tab4" class="container" >
				<div class="section" >
					<div class="row" >	
						<div class="right">
							<div id="section4" class="col s12 right">
								<p class="titleservices size45 italic right-align"><b>
									{{$data->mon_materia_title}}
								</b></p>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em; margin-top: 2em;" class="right-align light med-lineheight">
									{{$data->mon_materia_desc}}
								</p>
								<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 55%; ">
								<img style="width: 70%; position: absolute; top:6em; left:-3em; z-index: 100; " src="../media/img/monumental/{{$data->mon_materia_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/monumental/{{$data->mon_materia_pic}}" alt="escultura1">
							</div>
						</div>
					</div>
				</div>
			</div>
		
	</div>
	<div style="background-image:url('../media/img/monumental/{{$data->mon_form_bg}}')" class="bg-monumental-form">
		<div class="container" >
			<div class="section" >
				<div class="row">
					<div class="col l12 m12 s12 center hide-on-med-and-down " >
						<p style="padding-top: 15vw; padding-bottom: 14vw;" class="titleservices large-spacing headerForm white-text light">{{$data->mon_form_header}}</p>
					</div>
					<div class="col l12 m12 s12 center hide-on-large-only" >
						<p style="padding-top: 15vw; font-size: 2rem; ; padding-bottom: 14vw;" class="titleservices large-spacing white-text light">{{$data->mon_form_header}}</p>
					</div>
				</div>
				<div id="divform" class="row">
					<div class="col s12 m12 l6 offset-l3 bg-white">	
						<p style="padding-left: 4vw; padding-right: 3vw; margin-top: 3vw;" class="titleservices size45 italic"><b>
							{{$data->mon_form_title}}
						</b></p>
						<p class="med-lineheight" style="padding-left: 4vw; padding-right: 3vw; margin-top: 2.4vw; margin-bottom: 2.4vw  ">
							{{$data->mon_form_desc}}
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

@stop
@section('addJs')
	<script src="../js/monumental.js"></script>
	<script src="../vendor/js/jquery.smooth-scroll.min.js"></script>
@stop