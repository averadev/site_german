@extends('templates.main')
@section('content')
</style>
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<ul class="tabs menuFont black-tabs">
						<li class="tab"><a id="monumental" href="monumental">ESCULTURA MONUMENTAL</a></li>
						<li class="tab"><a class="active" href="personalizadas" >ESCULTURAS PERSONALIZADAS</a></li>
						<li class="tab"><a id="interiores" href="interiores" >ESCULTURAS PARA INTERIORES</a></li>
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
						<h3 style="margin-top: 3em;" class="titleservices large-spacing header light">{{$data->per_banner_title}}</h3>
					</div>
					<div class="row center">
						<a style="margin-top: 3%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>
					<br><br>
				</div>
			</div>
			<div style="height: 300px; " class="parallax"><img src="../media/img/personalizadas/{{$data->per_banner_pic}}" alt="banner"></div>
		</div>
		<div id="section1" class="container" >
			<div class="section" >
				<div style="margin-top: 1%; margin-bottom: 9%;" class="row">
					<div class="col s12">
						<p class="center-align par-title max-light">{{$data->per_unico_title}}</p>
					</div>
					<div class="col l6 m10 s12 offset-l3 offset-m1">
						<p style="font-size: 1.2em; " class="center-align light med-lineheight " >{{$data->per_unico_desc}}</p>
					</div>					
				</div>
				<div class="row" >
					<div class="col l10 m12 s12 offset-l1 ">
						<div class="right">
							<div id="section2" class="col s12 right">
								<p class="titleservices size45 italic right-align"><b>
									{{$data->per_entrevista_title}}
								</b></p>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em; margin-top: 2em;" class="right-align light med-lineheight">
									{{$data->per_entrevista_desc}}
								</p>
								<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 65%;">
							<img style="width: 65%; position: absolute; top:7.5em; left:-3em; z-index: 100; " src="../media/img/personalizadas/{{$data->per_entrevista_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/{{$data->per_entrevista_pic}}" alt="escultura1">
						</div>		
						<div class="row no-margin-bottom"> 
							<div id="section3" class="col s12">
								<p class="titleservices size45 italic left-align"><b>
									{{$data->per_lluvia_title}}
								</b></p>
							</div>
						</div>					
						<div class="row no-margin-bottom">
							<div class="col s12 l4">
								<p style="font-size: 1em; margin-top: 2em;" class="light med-lineheight">
									{{$data->per_lluvia_desc}}
								</p>
								<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 40%;">
							<img style="width: 63%; position: absolute; top:-11em; right:0em; z-index: 100; " src="../media/img/personalizadas/{{$data->per_lluvia_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/{{$data->per_lluvia_pic}}" alt="escultura1">
						</div>												
						<div class="right">
							<div id="section4" class="col s12">
								<p class="titleservices size45 italic right-align"><b>
									{{$data->per_materia_title}}
								</b></p>
							</div>
							<div class="col s12 l4 offset-l8">
								<p style="font-size: 1em; margin-top: 2em;" class="right-align light med-lineheight">
									{{$data->per_materia_desc}}
								</p>
								<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 60%;">
								<img style="width: 70%; position: absolute; top:7.5em; left:-3em; z-index: 100; " src="../media/img/personalizadas/{{$data->per_materia_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/{{$data->per_materia_pic}}" alt="escultura1">
							</div>													
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div style="background-image:url('../media/img/personalizadas/{{$data->per_form_bg}}')" class="bg-services-form">
			<div class="container" >
				<div class="section" >
					<div style="margin-top: 36vw;" class="row">
						<div  style="background-color: transparent;" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">	
							<p style="color: white;" class="titleservices hide-on-med-and-down size45 italic"><b>
								{{$data->per_form_title}}
							</b></p>
						</div>
						<div id="formsection" class="col black-section">	
							<form class=" col s10 m10 l6 offset-m1 offset-s1 offset-l3">
							<div class="hide-on-large-only">
								<p style="color: white;" class="titleservices size45 italic"><b>
									{{$data->per_form_title}}
								</b></p>				
							</div>
							<p class="med-lineheight" style="margin-top: 2.4vw; margin-bottom: 2.4vw; color: white;  ">
								{{$data->per_form_desc}}
							</p>
								<input id="myname"  class="black-input" required type="text" placeholder="Nombre Completo">
								<input id="myemail" class="black-input" required type="text" placeholder="Correo electronico">
								<input id="myemail" class="black-input" required type="text" placeholder="Compañia / Empresa">
								<input id="myemail" class="black-input" required type="text" placeholder="Día para la cita">
									<textarea  cols="100" style="height: 100px" placeholder="Comentarios" ></textarea>							
								<button style="margin-bottom: 10%;" class="waves-effect green right med-button light btn">HACER CITA</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('addJs')
<script src="../js/personalizadas.js"></script>
<script src="../vendor/js/jquery.smooth-scroll.min.js"></script>
@stop