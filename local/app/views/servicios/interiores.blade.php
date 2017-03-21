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
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">
			<div class="section">
				<div class="row"  style="margin-bottom: 0em;">
					<div class="col s12">   
						<ul class="tabs menuFont black-tabs">
							<li class="tab"><a id="monumental" href="monumental">ESCULTURA MONUMENTAL</a></li>
							<li class="tab"><a id="personalizadas" href="personalizadas">ESCULTURAS PERSONALIZADAS</a></li>
							<li class="tab"><a class="active" href="interiores">ESCULTURAS PARA INTERIORES</a></li>
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
						<p style="margin-top: 2em;" class="titleservices size45 med-spacing header col s12 light">{{$data->inter_banner_title}}</p>
					</div>
					<div class="row center">
						<a style="margin-top: 1%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Hacer cita</a>
					</div>
					<br><br>
				</div>
			</div>
			<div style="height: 300px;" class="parallax"><img src="../media/img/interiores/{{$data->inter_banner_pic}}" alt="banner"></div>
		</div>
		<div id="section1" class="container">
			<div class="section" >
				<div class="row">
					<div class="col s12">
						<p class="center-align par-title max-light">{{$data->inter_distincion_title}}</p>
					</div>
					<div class="col l6 m10 s12 offset-l3 offset-m1">
						<p style="font-size: 1.2em; " class="center-align light med-lineheight">{{$data->inter_distincion_desc}}</p>
					</div>
					<div class="hide-on-med-and-down" style="position: relative; padding-bottom: 20em;">
						<img style="width: 31%; position: absolute; top:-22.5em; left:0em;" src="../media/img/interiores/{{$data->inter_distincion_pic}}" alt="escultura1">
					</div>
					<div class="hide-on-large-only">
						<img style="width: 30%; margin-left: 35%; margin-top: 5%;" src="../media/img/interiores/{{$data->inter_distincion_pic}}" alt="escultura1">
					</div>					
				</div>
				<div class="row" >
					<div class="col l10 m12 s12 offset-l1">
						<div class="row no-margin-bottom"> 
							<div id="section2" class="col s12 l12">
								<p class="titleservices size4 italic indent-after-first-x hide-on-med-and-down"><b>
									{{$data->inter_catalogo_title}}
								</b></p>
								<p class="titleservices size4 italic hide-on-large-only"><b>
									{{$data->inter_catalogo_title}}
								</b></p>								
							</div>
						</div>					
						<div class="row no-margin-bottom">
							<div class="col s12 l4">
								<p class="description-services light">
									{{$data->inter_catalogo_desc}}
								</p>
								<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 36%;">
							<img class="txt-over" style="width: 65%; position: absolute; top:-14em; right:0em;" src="../media/img/interiores/{{$data->inter_catalogo_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/{{$data->inter_catalogo_pic}}" alt="escultura1">
						</div>
						<div class="right">
							<div id="section3" class="col s12 l12 right">
								<p class="titleservices size4 italic right-align add-right-ident-x2 hide-on-med-and-down"><b>
									{{$data->inter_person_title}}
								</b>
								<p class="titleservices size4 italic right-align hide-on-large-only"><b>
									{{$data->inter_person_title}}
								</b>								
							</div>
							<div class="col s12 l4 offset-l8">
								<p class="description-services light">
									{{$data->inter_person_desc}}
								</p>
								<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 80%;">
								<img class="txt-over" style="width: 90%; position: absolute; top:12em; left:-10em;" src="../media/img/interiores/{{$data->inter_person_pic}}" alt="escultura1">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/{{$data->inter_person_pic}}" alt="escultura1">
							</div>													
						</div>

						<div class="row no-margin-bottom"> 
							<div id="section4" class="col s12 l12">
								<p class="titleservices size4 indent-after-first-x2 italic hide-on-med-and-down"><b>
									{{$data->inter_pieza_title}}
								</b></p>
								<p class="titleservices size4 italic hide-on-large-only"><b>
									{{$data->inter_pieza_title}}
								</b></p>								
							</div>
						</div>

						<div class="row no-margin-bottom">
							<div class="col s12 l4">
								<p class="description-services light">
									{{$data->inter_pieza_desc}}
								</p>
								<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>HACER CITA</a>
							</div>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 35%;">
							<img class="txt-over" style="width: 66%; position: absolute; top:-16.5em; right:0em;" src="../media/img/interiores/{{$data->inter_pieza_pic}}" alt="escultura1">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../media/img/interiores/{{$data->inter_pieza_pic}}" alt="escultura1">
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div style="background-image:url('../media/img/interiores/{{$data->inter_form_bg}}')" class="bg-services-form">
			<div class="container" >
				<div class="section" >
					<div class="row">
						<div class="col l12 m12 s12 center" >
							<p style="padding-top: 16vw; padding-bottom: 15vw;" class="titleservices med-spacing headerForm white-text light">{{$data->inter_form_header}}</p>
						</div>
					</div>
					<div id="divform" class="row">
						<div class="col s12 m12 l8 offset-l2 bg-white">		
							<p style="padding-left: 4vw; margin-top: 3vw;" class="titleservices indent-after-first-s3 size45 italic hide-on-med-and-down"><b>
								{{$data->inter_form_title}}
							</b></p>
							<p style="margin-top: 4%; margin-bottom: 7%; text-align: center;" class="titleservices size4 italic hide-on-large-only"><b>
								{{$data->inter_form_title}}
							</b></p>							
							<p class="med-lineheight" style="padding-left: 5.5vw; font-size: 1.3rem; padding-right: 4.5vw; margin-top: 2.4vw; margin-bottom: 2.4vw ">
								{{$data->inter_form_desc}}
							</p>
							<form class="whiteform col s12 m12 l10 offset-l1" data-abide id="mailform">							
								<div data-abide-error class="alert callout" style="display: none;">
									<p><i class="fi-alert"></i> Porfavor completa todos los campos.</p>
								</div>
								<div class="success callout" style="display: none;">
									<p><i class="fi-success"></i> Mensaje enviado.</p>
								</div>
								<input id="myname" required type="text" placeholder="Nombre Completo">
								<input id="myemail" required type="text" placeholder="Correo electrónico">
								<input id="myemail" required type="text" placeholder="Compañía / Empresa">
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
<script src="../js/interiores.js"></script>
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