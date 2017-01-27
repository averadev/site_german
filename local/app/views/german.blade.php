@extends('templates.main')
@section('content')

    <!-- SubMenu German -->
    <div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<ul class="tabs black-tabs">
						<li class="tab"><a class='smooth' href="#" goto="#german-1">¿QUIÉN SOY?</a></li>
						<li class="tab"><a class='smooth' href="#" goto="#german-2">EL PENSADOR</a></li>
						<li class="tab"><a class='smooth' href="#" goto="#german-3">EL ESCULTOR</a></li>
						<li class="tab"><a class='smooth' href="#" goto="#german-4">¿QUE ME MUEVE?</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!-- SubMenu German -->
    
    <!-- Slider German -->
    <div id="german-1" class="parallax-container fontCrimson">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">G</span>ERMÁN <span style="font-size: 4.5rem;">A</span>RZATE</p>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="media/img/german/slider1.png"></div>
	</div>
	<!-- Slider German -->

    <!-- Section German -->
    <div class="container fontCrimson">
        <div class="row" style="margin: 50px 0 50px 0;">
            <div class="col s12 m12 l5">
                <div class="row right" style="margin:70px 10px 0 0;">
                    <div class="itaBold" style="font-size: 4rem; line-height: 120%;">Más allá,</div>
                    <div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;">de las montañas de palabras y fríos pensamientos del alma.</div>
                    <br/><br/>
                    <div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">Empacó sus siete versales, enfundó su inicial en el cinturón y se puso en camino cuando ya habia escalado las primeras colinas.</div>
                </div>
            </div>
            <div class="col s12 m12 l7">
                <img class="imgFloat" src="media/img/german/escultura1.png">
            </div>
        </div>
    </div>
    <!-- Section German -->

    <!-- Slider Pensador -->
    <div id="german-2" class="parallax-container fontCrimson">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row left">
					<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">P</span>ENSADOR</p>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="media/img/german/slider2.png"></div>
	</div>
	<!-- Slider Pensador -->

    <!-- Section Pensador -->
    <div class="container fontCrimson">
        <div class="row" style="margin: 50px 0 0 0;">
            <div class="col s12 m12 l5 center">
                <img class="imgFloat" src="media/img/german/escultura2.png">
            </div>
            <div class="col s12 m12 l7">
                <div class="row left" style="margin:50px 20px 30px; 0;">
                    <div class="itaBold" style="font-size: 4rem; line-height: 120%;">Inspiración</div>
                    <div class="itaBold" style="font-size: 2.5rem; padding-left:60px; line-height: 110%;">en los sueños y en el cantar del zwampath del barril.</div>
                    <br/><br/>
                    <div style="font-size: 1.5rem; width:70%; padding-left:60px; line-height: 120%;">Empacó sus siete versales, enfundó su inicial en el cinturón y se puso en camino cuando ya habia escalado las primeras colinas.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Pensador -->

    <!-- Slider Escultor -->
    <div id="german-3" class="parallax-container fontCrimson">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row right">
					<p style="margin-top: 100px;" class="header col s12 light ContactT"><span style="font-size: 4.5rem;">E</span>SCULTOR</p>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="media/img/german/slider3.png"></div>
	</div>
	<!-- Slider Escultor -->

    <!-- Section Escultor -->
	<div id="german-4" class="bg_contact" >
		<div class="section"  style="padding: 0 0 40px 0;">
			<div class="container fontCrimson">
				<div class="row center">
					<p class="itaBold" style="font-size: 2.5rem; line-height: 100%;">Todo comienza con los <span style="font-size: 4rem;">sueños,</span><br/>
                       es el punto de partida a un viaje interno.</p>
                    <div class="row">
                        <div class="col s6 m6 l8 right">
                            <span style="font-size: 1.2rem;">-GERMAN ARZATE.</span>
                        </div>
                    </div>
                    <img src="media/img/german/logo.png">
				</div>
			</div>
		</div>
	</div>
    <!-- Section Escultor -->

@stop
@section('addJs')
<script src="js/german.js"></script>
@stop