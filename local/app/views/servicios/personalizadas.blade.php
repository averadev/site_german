@extends('templates.main')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/obras_especiales.css') }}">
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">
			<div class="section">
				<div class="row ga-margin-1">
					<div class="col s12">
						<nav id="navigation-menu" class="white">
							<ul class="tabs-menu menuFont">
								<li class="tab"><a id="monumental" href="monumental">ESCULTURA MONUMENTAL</a></li>
								<li class="tab"><a class="active" href="#personalizadas">ESCULTURAS PERSONALIZADAS</a></li>
								<li class="tab"><a id="interiores" href="interiores">ESCULTURAS PARA INTERIORES</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end submenu fixed -->
	<br>
	<br>
	<br>
	<br>
	<article id="personalizadas" class="scrollspy">
		<div>
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot">
					<div class="container">
						<br><br>
						<div class="row center">
							<p style="margin-top: 3em;" class="titleservices size45 med-spacing header col s12 light">{{$data->per_banner_title}}</p>
						</div>
						<div class="row center">
							<a style="margin-top: 3%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
						</div>					
						<br><br>
					</div>
				</div>
				<div style="height: 300px;" class="parallax"><img src="../media/img/obras_especiales/{{$data->per_banner_pic}}" alt="banner"></div>
			</div>
			<div id="section1" class="container">
				<div class="section">
					<div style="margin-top: 1%; margin-bottom: 9%;" class="row">
						<div class="col s12">
							<p class="center-align par-title max-light">{{$data->per_unico_title}}</p>
						</div>
						<div class="col l6 m10 s12 offset-l3 offset-m1">
							<p style="font-size: 1.2em;" class="center-align light med-lineheight">{{$data->per_unico_desc}}</p>
						</div>					
					</div>
					<div class="row">
						<div class="col l10 m12 s12 offset-l1">
							<div class="right">
								<div id="section2" class="col s12 right">
									<p class="titleservices size4 italic right-align add-right-ident hide-on-med-and-down"><b>
										{{$data->per_entrevista_title}}
									</b></p>
									<p class="titleservices size4 italic right-align hide-on-large-only"><b>
										{{$data->per_entrevista_title}}
									</b></p>								
								</div>
								<div class="col s12 l4 offset-l8">
									<p class="description-services light">
										{{$data->per_entrevista_desc}}
									</p>
									<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
								</div>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 70%;">
								<img class="txt-over" style="width: 70%; position: absolute; top:7.5em; left:-3em;" src="../media/img/obras_especiales/{{$data->per_entrevista_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/obras_especiales/{{$data->per_entrevista_pic}}" alt="escultura1">
							</div>		
							<div class="row no-margin-bottom"> 
								<div id="section3" class="col s12">
									<p class="titleservices size4 italic left-align hide-on-med-and-down indent-after-first"><b>
										{{$data->per_lluvia_title}}
									</b></p>
									<p class="titleservices size4 italic left-align hide-on-large-only"><b>
										{{$data->per_lluvia_title}}
									</b></p>								
								</div>
							</div>					
							<div class="row no-margin-bottom">
								<div class="col s12 l4">
									<p class="description-services light">
										{{$data->per_lluvia_desc}}
									</p>
									<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
								</div>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 40%;">
								<img class="txt-over" style="width: 63%; position: absolute; top:-11em; right:0em;" src="../media/img/obras_especiales/{{$data->per_lluvia_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/obras_especiales/{{$data->per_lluvia_pic}}" alt="escultura1">
							</div>												
							<div class="right">
								<div id="section4" class="col s12">
									<p class="titleservices size4 italic right-align add-right-ident-x hide-on-med-and-down"><b>
										{{$data->per_materia_title}}
									</b></p>
									<p class="titleservices size4 italic right-align hide-on-large-only"><b>
										{{$data->per_materia_title}}
									</b></p>					
								</div>
								<div class="col s12 l4 offset-l8">
									<p class="description-services light">
										{{$data->per_materia_desc}}
									</p>
									<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
								</div>
								<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 72%;">
									<img class="txt-over" style="width: 90%; position: absolute; top:7.5em; left:-3em;" src="../media/img/obras_especiales/{{$data->per_materia_pic}}" alt="escultura1">
								</div>
								<div class="hide-on-large-only">
									<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/obras_especiales/{{$data->per_materia_pic}}" alt="escultura1">
								</div>													
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div style="background-image:url('../media/img/obras_especiales/{{$data->per_form_bg}}')" class="bg-services-form">
				<div class="container">
					<div class="section">
						<div style="margin-top: 36vw;" class="row">
							<div id="formsection" style="background-color: transparent; width: 70%; margin-left:22.5%;" class="">	
								<p style="color: white;" class="titleservices hide-on-med-and-down indent-after-first-s2 size45 italic"><b>
									{{$data->per_form_title}}
								</b></p>
							</div>
							<div class="col black-section">	
								<form class=" col s10 m10 l8 offset-m1 offset-s1 offset-l2" action="" method="POST">
								<div class="hide-on-large-only">
									<p style="color: white; text-align: center;" class="titleservices size4 italic"><b>
										{{$data->per_form_title}}
									</b></p>				
								</div>
								<p class="med-lineheight subtitle-form-b">
									{{$data->per_form_desc}}
								</p>
									<input id="myname" class="black-input" required type="text" name="name" placeholder="Nombre Completo">
									<input id="myemail" class="black-input" required type="text" name="email" placeholder="Correo electrónico">
									<input id="mycompany" class="black-input" required type="text" name="company" placeholder="Compañía / Empresa">
									<input id="myday" class="black-input" required type="text" name="day" placeholder="Día para la cita">
									<textarea id="comments" cols="100" style="height: 100px; color: white;" name="comments" placeholder="Comentarios"></textarea>
									<button id="btnForm" style="margin-bottom: 10%;" class="waves-effect green right med-button light btn">HACER CITA</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
@stop
@section('addJs')
<script src="{{ URL::asset('js/personalizadas.js') }}"></script>
<script src="{{ URL::asset('vendor/js/jquery.smooth-scroll.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.smooth.js') }}"></script>
<script src="{{ URL::asset('js/jquery-scroll.js') }}"></script>
@stop