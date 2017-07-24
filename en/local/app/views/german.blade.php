@extends('templates.main')
@section('content')
<style>
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
	<div class="contenedor_nav">
		<div class="container">		
			<div class="row">
				<div class="col s12">
					<nav id="navigation-menu">
						<ul class="tabs-menu">
							<li class="tab"><a class="" href="#tab1">¿WHO A IM?</a></li>
							<li class="tab"><a class="" href="#tab2">THE THINKER</a></li>
							<li class="tab"><a class="" href="#tab3">THE SCULPTOR</a></li>
							<li class="tab"><a class="" href="#tab4">WHAT INSPIRES ME</a></li>
						</ul>
					</nav>
				</div>
			</div>		
		</div>
	</div>
	<!-- SubMenu German -->
	<br>
	<br>
	<br>	
	<!-- start ¿Quién Soy? -->
	<article id="tab1" class="scrollspy">
		<div id="">
			<!-- Slider German -->
			<div id="index-banner" class="parallax-container fontCrimson">
				<div class="section no-pad-bot">
					<div class="container">
						<div class="row center">
							<p style="margin-top: 100px;" class="header col s12 light ContactT">{{$data->ger_sec1_title}}</p>
							<img id="movedown" style="width: 45px; margin-top: 2em; cursor: pointer;" src="../media/img/home/scroll.png" alt="scroll">
						</div>
					</div>
				</div>
				<div class="parallax"><img src="../media/img/german/{{$data->ger_sec1_bg}}" alt="{{$data->ger_sec1_bg_alt}}" ></div>
			</div>
			<!-- Slider German -->

			<!-- Section German -->
			<div id="section1" class="section no-pad-bot white">
				<div class="container fontCrimson">
					<div class="row" style="margin: 50px 0 0 0;">
						<div class="col s12 m12 l5">
							<div class="row right" style="margin:70px 10px 0 0;">
								<div class="itaBold" style="font-size: 4rem; line-height: 120%;">{{$data->ger_sec2_txt1}}</div>
								<div class="itaBold" style="font-size: 2.1rem; line-height: 120%;">{{$data->ger_sec2_txt2}}</div>
								<!-- <div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;"></div> -->
								<br/><br/>
								<div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">{{$data->ger_sec2_txt3}}</div>
							</div>
						</div>
						<div class="col s12 m12 l7">
							<img class="imgFloat" alt="{{$data->ger_sec2_img1_alt}}" src="../media/img/german/{{$data->ger_sec2_img1}}">
						</div>
					</div>
				</div>
			</div>
			<!-- Section German -->
		</div>
	</article>
	<!-- end ¿Quién Soy? -->

	<!-- start El Pensador -->
	<article id="tab2" class="scrollspy">
		<div id="">
			<!-- Slider Pensador -->
			<div class="parallax-container fontCrimson">
				<div class="section no-pad-bot">
					<div class="container">
						<div class="row left">
							<p style="margin-top: 100px;" class="header col s12 light ContactT">{{$data->ger_sec3_title}}</p>
						</div>
					</div>
				</div>
				<div class="parallax"><img src="../media/img/german/{{$data->ger_sec3_bg}}" alt="{{$data->ger_sec3_bg_alt}}" ></div>
			</div>
			<!-- Slider Pensador -->

			<!-- Section Pensador -->
			<div class="section no-pad-bot white">
				<div class="container fontCrimson">
					<div class="row" style="margin: 50px 0 0 0;">
						<div class="col s12 m12 l5 center gb_nomarginbottom">
							<img class="imgFloat" src="../media/img/german/{{$data->ger_sec4_img1}}" alt="{{$data->ger_sec4_img1_alt}}" >
						</div>
						<div class="col s12 m12 l7">
							<div class="row left" style="margin:50px 20px 30px;">
								<div class="itaBold" style="font-size: 4rem; line-height: 120%;">{{$data->ger_sec4_txt1}}</div>
								<div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;">{{$data->ger_sec4_txt2}}</div>
								<br/><br/>
								<div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">{{$data->ger_sec4_txt3}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Section Pensador -->
		</div>
	</article>
	<!-- end El Pensador -->

	<!-- start El Escultor -->
	<article id="tab3" class="scrollspy">
		<div id="">
			<!-- Slider Escultor -->
			<div class="parallax-container fontCrimson">
				<div class="section no-pad-bot">
					<div class="container">
						<div class="row right">
							<p style="margin-top: 100px;" class="header col s12 light ContactT">{{$data->ger_sec5_title}}</p>
						</div>
					</div>
				</div>
				<div class="parallax"><img src="../media/img/german/{{$data->ger_sec5_bg}}" alt="{{$data->ger_sec5_bg_alt}}" ></div>
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
	</article>
	<!-- end El Escultor -->
	
	<!-- start ¿Qué Me Mueve? -->
	<article id="tab4" class="scrollspy">
		<div id="">
			<div class="bg_bottom" style="background-image: url('../media/img/german/{{$data->ger_sec7_bg}}'); background-size: cover; overflow: hidden;" title="{{$data->ger_sec7_bg_alt}}" >
				<div class="section" style="padding: 0 0 40px 0;">
					<div class="container fontCrimson">
						<div class="row center no-margin-bottom">
							<div class="row center no-margin-bottom">
								<div class="col s12 m12 l7 offset-l2">
									<br><br>
									<p class="gb_blockquote">{{$data->ger_sec7_txt1}}</p>
									<div class="row">
										<div class="col s6 m6 l8 right">
											<span class="fontCrimson gb_blockquoteAuthor">- German Arzate</span>
										</div>
									</div>
									<img src="../media/img/german/{{$data->ger_sec7_img1}}" alt="{{$data->ger_sec7_img1_alt}}" >
									<br><br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!-- end ¿Qué Me Mueve? -->
@stop
@section('addJs')
	<script src="js/german.js"></script>
	<script src="vendor/plugins/jquery.smooth-scroll.min.js"></script>
@stop