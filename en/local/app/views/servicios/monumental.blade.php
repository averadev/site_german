@extends('templates.main')
@section('content')
	<link rel="stylesheet" href="{{ URL::asset('css/app/obras_especiales.css') }}">
	<div class="contenedor_nav">
		<div class="container">
			<div class="row no-margin-bottom">
				<div class="col s12">
					<nav id="navigation-menu" class="white">
						<ul class="tabs-menu menuFont">
							<li class="tab"><a class="active" href="#monumental">MONUMENTAL SCULPTURES</a></li>
							<li class="tab"><a id="personalizadas" href="personalizadas" >CUSTOM SCULPTURES</a></li>
							<li class="tab"><a id="interiores" href="interiores" >INTERIOR SCULPTURES</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- end submenu fixed -->
	<br>
	<br>
	<br>
	<!-- start escultura monumental -->
	<article id="monumental" class="scrollspy">
		<div>
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot">
					<div class="container">
						<br><br>
					<!--	<h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
						<div class="row center">
							<p style="margin-top: 2em;" class="titleservices size45 med-spacing header col s12 light">{{$data->mon_banner_title}}</p>
						</div>
						<div class="row center">
							<a style="margin-top: 3%;" class="appointment waves-effect transparent lighten-5 white-border noshadow btn">Make an appointment</a>
						</div>
						<br><br>
					</div>
				</div>
				<div style="height: 300px;" class="parallax"><img src="../../media/img/obras_especiales/{{$data->mon_banner_pic}}" alt="{{$data->mon_banner_pic_alt}}"></div>
			</div>
			<div id="section1" class="container">
				<div class="section" >
					<div class="row">
						<div class="col s12">
							<p class="center-align par-title max-light">{{$data->mon_unico_title}}</p>
						</div>
						<div class="col l6 m10 s12 offset-l3 offset-m1">
							<p class="center-align font12 light med-lineheight">{{$data->mon_unico_desc}}</p>
						</div>
						<div class="hide-on-med-and-down" style="position: relative; padding-bottom: 20em;">
							<img style="width: 28%; position: absolute; top:-25em; left:0em;" src="../../media/img/obras_especiales/{{$data->mon_unico_pic}}" alt="{{$data->mon_unico_pic_alt}}">
						</div>
						<div class="hide-on-large-only">
							<img style="width: 30%; margin-left: 35%; margin-top: 5%;" src="../../media/img/obras_especiales/{{$data->mon_unico_pic}}" alt="{{$data->mon_unico_pic_alt}}">
						</div>					
					</div>
					<div class="row">
						<div class="col l10 m12 s12 offset-l1">
							<div class="right">
								<div id="section2"  class="col s12 right">
									<p class="titleservices hide-on-med-and-down size4 italic right-align add-right-ident"><b>
										{{$data->mon_entrevista_title}}
									</b></p>
									<p class="titleservices hide-on-large-only size4 italic right-align"><b>
										{{$data->mon_entrevista_title}}
									</b></p>								
								</div>
								<div class="col s12 l4 offset-l8">
									<p class="description-services light">
										{{$data->mon_entrevista_desc}}
									</p>
									<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>Make an appointment</a>
								</div>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 74%;">
								<img class="txt-over" style="width: 70%; position: absolute; top:7.5em; left:-3em;" src="../../media/img/obras_especiales/{{$data->mon_entrevista_pic}}" alt="{$data->mon_entrevista_pic_alt}}">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../../media/img/obras_especiales/{{$data->mon_entrevista_pic}}" alt="{{$data->mon_entrevista_pic_alt}}">
							</div>		
							<div class="row no-margin-bottom"> 
								<div id="section3" class="col s12">
									<p class="titleservices hide-on-med-and-down size4 italic left-align indent-after-first"><b>
										{{$data->mon_lluvia_title}}
									</b></p>
									<p class="titleservices hide-on-large-only size4 italic left-align"><b>
										{{$data->mon_lluvia_title}}
									</b></p>								
								</div>
							</div>					
							<div class="row no-margin-bottom">
								<div class="col s12 l4">
									<p class="description-services light">
										{{$data->mon_lluvia_desc}}
									</p>
									<a class="appointment small-button waves-effect grey lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>Make an appointment</a>
								</div>
							</div>
							<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 31%;">
								<img class="txt-over" style="width: 75%; position: absolute; top:-12.5em; right:0em;" src="../../media/img/obras_especiales/{{$data->mon_lluvia_pic}}" alt="{{$data->mon_lluvia_pic_alt}}">
							</div>
							<div class="hide-on-large-only">
								<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../../media/img/obras_especiales/{{$data->mon_lluvia_pic}}" alt="{{$data->mon_lluvia_pic_alt}}">
							</div>												
							<div class="right">
								<div id="section4" class="col s12 right">
									<p class="titleservices hide-on-med-and-down add-right-ident-x size4 italic right-align"><b>
										{{$data->mon_materia_title}}
									</b></p>
									<p class="titleservices hide-on-large-only size4 italic right-align"><b>
										{{$data->mon_materia_title}}
									</b></p>								
								</div>
								<div class="col s12 l4 offset-l8">
									<p class="description-services light">
										{{$data->mon_materia_desc}}
									</p>
									<a class="appointment small-button waves-effect grey right lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>Make an appointment</a>
								</div>
								<div class="hide-on-med-and-down" style="position: relative; margin-bottom: 60%; ">
									<img class="txt-over" style="width: 70%; position: absolute; top:6em; left:-3em;" src="../../media/img/obras_especiales/{{$data->mon_materia_pic}}" alt="{{$data->mon_materia_pic_alt}}">
								</div>
								<div class="hide-on-large-only">
									<img style="width: 80%; margin-left: 10%; margin-top: 10%;" src="../../media/img/obras_especiales/{{$data->mon_materia_pic}}" alt="{{$data->mon_materia_pic_alt}}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="background-image:url('../../media/img/obras_especiales/{{$data->mon_form_bg}}')" title="{{$data->mon_form_bg_alt}}" class="bg-services-form">
				<div class="container">
					<div class="section">
						<div class="row">
							<div class="col l12 m12 s12 center">
								<p style="padding-top: 16vw; padding-bottom: 15vw;" class="titleservices med-spacing headerForm white-text light">{{$data->mon_form_header}}</p>
							</div>
						</div>
						<div id="divform" class="row">
							<div class="col s12 m12 l8 offset-l2 bg-white">	
								<p style="padding-left: 4vw; margin-top: 3vw;" class="titleservices size45 indent-after-first-s italic hide-on-med-and-down"><b>
									{{$data->mon_form_title}}
								</b></p>
								<p style="margin-top: 4%; margin-bottom: 7%; text-align: center;" class="titleservices size4 italic hide-on-large-only"><b>
									{{$data->mon_form_title}}
								</b></p>
								<p class="med-lineheight subtitle-form">
									{{$data->mon_form_desc}}
								</p>
								<form id="form_appt" class="whiteform col s12 m12 l10 offset-l1" >
									<input type="hidden" name="emailtype" value="3">
									<input name="name" required type="text" maxlength="50" placeholder="Name">
									<input name="email" required type="text" maxlength="50" placeholder="E-mail">
									<input name="company"  required type="text" maxlength="50" placeholder="company">
									<input name="date" class="datepicker" required type="text" placeholder="Meeting date">
									<textarea name="comment" maxlength="250"  cols="100" style="height: 100px" placeholder="Comments" ></textarea>							
									<div id="progressdiv" class="progress hide"><div class="indeterminate"></div></div>
									<a id="sendAppt" class="waves-effect green right med-button light btn">Make an appointment</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!-- Modal-->
	<div id="msgModal" class="modal border-radius-10">
		<div class="notification">
			<h4 style="text-align: center;" id="titleModalMsg"></h4>
			<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
		</div>
		<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
			<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
		</div>
	</div>
	<!-- End Modal -->	
@stop
@section('addJs')
	<script src="../vendor/plugins/jquery.smooth-scroll.min.js"></script>
	<script src="../js/monumental.js"></script>	
@stop