@extends('templates.main')
@section('content')
	<style type="text/css">
		@media only screen and (max-width : 600px) {
			span.size-x35{
				font-size: 2.9rem;
			}
			p.size45{
				font-size: 2.3em;
			}
			p.size4{
				font-size: 1.5rem;
				line-height: 130%;
				margin: 1.14rem 0 0.912rem 0;

			}
			p.size4 br{
				display: none;
			}
			p.size41 br{
				display: none;
			}
		}
		.contenedor_submenu {
			position: fixed;
			width: 100%;
			height: 80px;
			background-color: #fff;
			top: 0;
			z-index: 10;
			margin-top: 4em;
		}
	</style>
</style>
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
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
	</div>
	<!-- end submenu fixed -->
	<br>
	<br>
	<br>
	<br>
	<div>
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<br><br>
				<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
					<div class="row center">
						<p style="margin-top: 3em;" class="titleservices size45 med-spacing header col s12 light">{{$data->per_banner_title}}</p>
					</div>
					<div class="row center">
						<a style="margin-top: 3%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>					
					<br><br>
				</div>
			</div>
			<div style="height: 300px;" class="parallax"><img src="../media/img/personalizadas/{{$data->per_banner_pic}}" alt="banner"></div>
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
				<div class="row" >
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
							<img class="txt-over" style="width: 70%; position: absolute; top:7.5em; left:-3em;" src="../media/img/personalizadas/{{$data->per_entrevista_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/{{$data->per_entrevista_pic}}" alt="escultura1">
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
							<img class="txt-over" style="width: 63%; position: absolute; top:-11em; right:0em;" src="../media/img/personalizadas/{{$data->per_lluvia_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/personalizadas/{{$data->per_lluvia_pic}}" alt="escultura1">
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
								<img class="txt-over" style="width: 90%; position: absolute; top:7.5em; left:-3em;" src="../media/img/personalizadas/{{$data->per_materia_pic}}" alt="escultura1">
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
			<div class="container">
				<div class="section">
					<div style="margin-top: 36vw;" class="row">
						<div id="formsection" style="background-color: transparent; width: 70%; margin-left:22.5%;" class="">	
							<p style="color: white;" class="titleservices hide-on-med-and-down indent-after-first-s2 size45 italic"><b>
								{{$data->per_form_title}}
							</b></p>
						</div>
						<div class="col black-section">	
							<form class=" col s10 m10 l8 offset-m1 offset-s1 offset-l2">
							<div class="hide-on-large-only">
								<p style="color: white; text-align: center;" class="titleservices size4 italic"><b>
									{{$data->per_form_title}}
								</b></p>				
							</div>
							<p class="med-lineheight" style="margin-top: 2.4vw; margin-bottom: 2.4vw; color: white; font-size: 1.3rem;">
								{{$data->per_form_desc}}
							</p>
								<input id="myname"  class="black-input" required type="text" placeholder="Nombre Completo">
								<input id="myemail" class="black-input" required type="text" placeholder="Correo electrónico">
								<input id="myemail" class="black-input" required type="text" placeholder="Compañía / Empresa">
								<input id="myemail" class="black-input" required type="text" placeholder="Día para la cita">
									<textarea  cols="100" style="height: 100px; color: white;" placeholder="Comentarios" ></textarea>							
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
<script src="../js/jquery.smooth.js"></script>
<script>
(function($){
	$(window).on("load",function(){

		$("#tabsNavbar a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
			highlightSelector:"#tabsNavbar a"
		});

		$("a[rel='next']").click(function(e){
			e.preventDefault();
			var to=$(this).parent().parent("section").next().attr("id");
			$.mPageScroll2id("scrollTo",to);
		});

	});
})(jQuery);
</script>
@stop