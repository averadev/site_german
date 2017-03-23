@extends('templates.main')
@section('content')
<style>
.contenedor_submenu {
	position: fixed;
	width: 100%;
	height: 90px;
	background-color: #fff;
	top: 0;
	z-index: 10;
	margin-top: 4em;
}
#navigation-menu {
	box-shadow: none;
}
#navigation-menu a {
	color: #a6a6a6;
	font-size: 14px;
	font-weight: bold;
	text-transform: uppercase;
}
#navigation-menu a:hover, a.mPS2id-highlight {
	background-color: transparent;
	color: black !important;
	border-bottom: 2px solid black;
}
.tabs-menu {
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
}
.tabs-menu {
	position: relative;
	overflow-x: auto;
	overflow-y: hidden;
	width: 100%;
	background-color: #fff;
	margin: 0 auto;
	white-space: nowrap;
}
p.gb_blockquote {
	font-family: "Crimson Text";
	font-size: 2rem;
	line-height: 140%;
	font-weight: bold;
	font-style: italic;
	color: #2d332c;
	text-indent: -2em;
}
.gb_blockquoteAuthor {
	font-size: 24px; 
	color: #2d332c;
}
.gb_text_medium {
	font-size: 2em;
}
</style>

	<!-- SubMenu German -->
	<div class="contenedor_submenu">
		<div class="container">
			<div class="section">
				<div class="row" style="margin-bottom: 0em;">
					<div class="col s12">
						<nav id="navigation-menu" class="white">
							<ul class="tabs-menu">
								<li class="tab"><a class="" href="#tab1">¿QUIÉN SOY?</a></li>
								<li class="tab"><a class="" href="#tab2">EL PENSADOR</a></li>
								<li class="tab"><a class="" href="#tab3">EL ESCULTOR</a></li>
								<li class="tab"><a class="" href="#tab4">¿QUÉ ME MUEVE?</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SubMenu German -->
	<br>
	<br>
	<br>
	<br>
	
	<!-- start ¿Quién Soy? -->
	<div id="tab1" class="scrollspy"></div>
	<div id="">
		<!-- Slider German -->
		<div id="index-banner" class="parallax-container fontCrimson">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">German</span> <span style="font-size: 4.5rem;">Arzate</span> - <span style="font-size: 2.8rem;">Escultor Mexicano</span></p>
						<img id="movedown" style="width: 45px; margin-top: 2em; cursor: pointer;" src="media/img/home/scroll.png" alt="scroll">
					</div>
				</div>
			</div>
			<div class="parallax"><img src="media/img/german/slider1.jpg"></div>
		</div>
		<!-- Slider German -->

		<!-- Section German -->
		<div id="section1" class="section no-pad-bot white">
			<div class="container fontCrimson">
				<div class="row" style="margin: 50px 0 0 0;">
					<div class="col s12 m12 l5">
						<div class="row right" style="margin:70px 10px 0 0;">
							<div class="itaBold" style="font-size: 4rem; line-height: 120%;">German Arzate</div>
							<div class="itaBold" style="font-size: 2.1rem; line-height: 120%;">(Ciudad de México, 1967)</div>
							<!-- <div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;"></div> -->
							<br/><br/>
							<div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">Escultor autodidacta, explorador de la forma desde temprana edad. Sus obras son fruto de la fusión de 2 figuras, elementos o conceptos donde una concepción dual es la constante.</div>
						</div>
					</div>
					<div class="col s12 m12 l7">
						<img class="imgFloat" src="media/img/german/escultura1.png">
					</div>
				</div>
			</div>
		</div>
		<!-- Section German -->
	</div>
	<!-- end ¿Quién Soy? -->

	<!-- start El Pensador -->
	<div id="tab2" class="scrollspy"></div>
	<div id="">
		<!-- Slider Pensador -->
		<div class="parallax-container fontCrimson">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row left">
						<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">P</span>ENSADOR</p>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="media/img/german/slider2.jpg"></div>
		</div>
		<!-- Slider Pensador -->

		<!-- Section Pensador -->
		<div class="section no-pad-bot white">
			<div class="container fontCrimson">
				<div class="row" style="margin: 50px 0 0 0;">
					<div class="col s12 m12 l5 center gb_nomarginbottom">
						<img class="imgFloat" src="media/img/german/escultura2.png">
					</div>
					<div class="col s12 m12 l7">
						<div class="row left" style="margin:50px 20px 30px; 0;">
							<div class="itaBold" style="font-size: 4rem; line-height: 120%;">Dualidad,</div>
							<div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;">Ideas que pueblan la visión del escultor.</div>
							<br/><br/>
							<div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">"La dualidad de la existencia humana es una constante en mi escultura: el placer y el dolor; la felicidad y la tristeza; el hombre y la mujer; el sol y la luna; el amor y la desilusión..."</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Section Pensador -->
	</div>
	<!-- end El Pensador -->

	<!-- start El Escultor -->
	<div id="tab3" class="scrollspy"></div>
	<div id="">
		<!-- Slider Escultor -->
		<div class="parallax-container fontCrimson">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row right">
						<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">E</span>SCULTOR</p>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="media/img/german/slider3.jpg"></div>
		</div>
		<!-- Slider Escultor -->

		<!-- Section Escultor -->
		<div class="section no-pad-bot white hide-on-med-and-down hide-on-large-only">
			<div class="container fontCrimson">
				<div class="row" style="margin: 50px 0 0 0;">
					<div class="col s12 m12 l7">
						<div class="row left" style="margin:50px 20px 30px 0;">
							<div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">
								German Arzate ha realizado exposiciones individuales en la Secretaría de Hacienda, en el Museo del Carmen, en el Museo Culhuacán, en distintas galerías particulares en la Ciudad de México y del interior de la República. La exposición más reciente fue en Agora Gallery en Nueva York. <br><br>
								Actualmente, se ha dedicado a crear una cantidad importante de obras escultóricas que reúne dentro de lo que él denomina "Realismo Fantástico", y que divide en tres géneros: místico, romántico y natural.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Section Escultor -->
	</div>
	<!-- end El Escultor -->
	
	<!-- start ¿Qué Me Mueve? -->
	<div id="tab4" class="scrollspy"></div>
	<div id="">
		<div class="bg_bottom" style="height: 600px; overflow: hidden;">
			<div class="section" style="padding: 0 0 40px 0;">
				<div class="container fontCrimson">
					<div class="row center">
						<div class="row center">
							<div class="col s12 m12 l7 offset-l2">
								<br><br>
								<p class="gb_blockquote">"Soy un apasionado de la vida, del amor y todo lo que me rodea. Siempre estoy en búsqueda de situaciones y sé que todo lo que está afuera, en la naturaleza, <span class="gb_text_medium">es parte de mí...</span><br/><br/>
								Quiero mostrar como legado todo lo que me apasiona, el legado persona del cual estoy enamorado."</p>
								<div class="row">
									<div class="col s6 m6 l8 right">
										<span class="fontCrimson gb_blockquoteAuthor">- German Arzate</span>
									</div>
								</div>
								<img src="media/img/german/logo.png">
								<br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end ¿Qué Me Mueve? -->


@stop
@section('addJs')
<script src="js/german.js"></script>
<script src="vendor/js/jquery.smooth-scroll.min.js"></script>
<script src="js/jquery.smooth.js"></script>
<script>
$(document).ready(function(){
	// scrollspy
	//$('body').scrollSpy({target: ".tabs", offset: 50});   

	$("#tabsNavbar a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function(){
				window.location.hash = hash;
			});
		}
	});

	$("#movedown").click(function(event) {
		$.smoothScroll({
			scrollTarget: $('#tab2'),
			speed: 1000,
			offset: -135
		});
	});
});
</script>
<script>
(function($){
	$(window).on("load",function(){

		$("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
			highlightSelector:"#navigation-menu a",
			pageEndSmoothScroll: true,
			forceSingleHighlight:true
		});

	});
})(jQuery);
</script>
@stop