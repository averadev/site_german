@extends('templates.main')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/app/subasta.css') }}">
	<!-- start submenu fixed -->
	<div class="contenedor_submenu" >
	<a href="{{ url('/subasta/registro') }}"  class="btn-signup waves-effect waves-light grey darken-2 btn btn-custom gb_noboxshadow">Registrarme</a>
		<div class="container">
			<div class="row gb_mrg_1 no-margin-bottom">
				<div class="col s12">
					<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
					<nav id="navigation-menu">
						<ul class="tabs-menu">
							<li class="tab"><a href="{{ url('/subasta') }}">¿Por Qué?</a></li>
							<li class="tab"><a href="{{ url('/subasta#tab2') }}">El Proceso</a></li>
							<li class="tab"><a href="{{ url('/subasta#tab3') }}">¿En Qué Te Convierte?</a></li>
							<li class="tab"><a href="{{ url('/subasta#tab4') }}">Especificaciones</a></li>
							<li class="tab"><a href="{{ url('/subasta/comentarios') }}">Comentarios</a></li>
							<li class="tab"><a class="active">Subasta</a></li>
							<li class="tab"><a href="{{ url('/subasta/proximamente') }}">Próximamente</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- end submenu fixed -->
	<div class="hide-on-small-only">
		<br>
		<br>
		<br>
		<br>
	</div>
	<!-- INFO SUBASTA -->
	<article id="tab6" class="scrollspy">
		<div class="hide-on-large-only">
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
		<div style="background-image:url('../media/img/subasta/bg_comingsoon.jpg'); background-size: cover;" id="">
			<div  class="container">
				<div class="row no-margin-bottom" style="padding-top: 4%;">
					<div class="col l6 s12"> <!-- LEFT SIDE -->
						<div style="padding: 10px 0 0 20px; border: 1px solid black; border-radius: 5px;">
							<span class="gb_title_auction">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
								<div class="row">
								<ul class="thumbnails col l2 s12">
									@foreach ($auctionpics as $key => $value)
										@if($value->name)
											@if($key == 0)
												<li>
													<a href="../media/img/subasta_esculturas/{{$value->name}}">
														<img src="../media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction active" alt="Thumbnail">
													</a>
												</li>
											@else
												<li>
													<a href="../media/img/subasta_esculturas/{{$value->name}}">
														<img src="../media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction" alt="Thumbnail">
													</a>
												</li>
											@endif
										@endif
									@endforeach
								</ul>
								<div class="col l10 s12">
									@if($auctionpics)
										@if($auctionpics[0]->name)
											<div class="main-image">
												<img src="../media/img/subasta_esculturas/{{$auctionpics[0]->name}}" alt="Placeholder" class="auction-image">
											</div>
										@endif
									@endif
								</div>
							</div>

							<div style="margin-top: 52px; margin-bottom: 20px;" >
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta1}}</p>
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta2}}</p>
							</div>
						</div>
						<div class="row">
							<div class="div-bids">
								<div class="white top_arrow_box whiteform contract" style="padding-left: 1rem; padding-right: 1rem;">
									
										<div id="bid_options" class=" {{ Auth::auct_user()->check() ? 'hideme' : '' }} ">  <!-- Seleccionar Opción -->
											<p class="size30 center-align">Quiero participar en la subasta:</p>
											<div class="row no-margin-bottom">
												<div class="col l6 m6 s12">
													<a href="{{ url('/subasta/registro') }}" target="_blank" class="bid-form-button btn col l12 left btn-small green waves-effect gb_noboxshadow">SOY NUEVO</a>
												</div>
												<div class="col l6 m6 s12">
													<button id="go_login" class="bid-form-button btn col l12 left btn-small green waves-effect gb_noboxshadow">ESTOY REGISTRADO</button>
												</div>											
											</div>
											<div class="row no-margin-bottom">
												<ul class="indicators">
													<li class="indicator-item active"></li>
													<li class="indicator-item"></li>
												</ul>
											</div>
										</div>
										<div id="login_user" class="hideme" > <!-- ingresar Correo -->
											<div class="row no-margin-bottom">
												<div class="col l8 offset-l2 s10 offset-s1 m10 offset-m1">
													<form id="login" class="my-form" style="margin-top: 1.5rem;" >
														<div class="row no-margin-bottom">
															<div class="col s12">
																<div class="col s12">
																	<input id="email_login" class="border_cs" maxlength="50" required type="text" name="email_login" placeholder="E-MAIL">
																	<input id="password_login" class="border_cs" maxlength="50" required type="password" name="password_login" placeholder="PASSWORD">
																</div>
															</div>
															<div class="col s12">
																<div class="col s6 m6 l5">
																	<a id="login_user_back" class="waves-effect waves-light col s12 m12 l12 grey lighten-1 bold600 btn gb_noboxshadow">REGRESAR</a>
																</div>
																<div class="col s6 m6 l7">
																	<a id="userlogin" class="waves-effect waves-light col s12 m12 l12 green bold600 btn gb_noboxshadow">CONTINUAR</a>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="row no-margin-bottom">
												<ul class="indicators ul-bids">
													<li class="indicator-item"></li>
													<li class="indicator-item active"></li>
												</ul>
											</div>
										</div>
										<!-- Nueva Oferta -->
										<div id="new_bid_div" style="position: relative; padding: 0.5rem; " class=" {{ Auth::auct_user()->check() ? '' : 'hideme' }} " > 
											<div class="row no-margin-bottom">
												<div class="row no-margin-bottom">
													<div class="col l12 m12 s12">
														<form id="new_bid_form" class="my-form">
															<p class="size30 par-div-bids">Realice una oferta:</p>
															<button id="close-session" class="btn-session waves-effect waves-light deep-orange btn btn-custom gb_noboxshadow">Cerrar Sesión</button>
															<div class="row no-margin-bottom">
																<div class="col s12 m6 l4" >
																	<input id="name_bid" class="border_cs" maxlength="50" required="" name="name_bid" placeholder="NOMBRE" type="text">
																</div>
																<div class="col s12 m6 l4" >
																	<input id="nick_bid" class="border_cs" maxlength="20" required type="text" name="nick_bid" placeholder="APODO">
																</div>
																<div class="col s12 m6 l4" >
																	<input id="amount_bid" class="border_cs" maxlength="9" required type="text" name="amount_bid" placeholder="CANTIDAD">
																</div>
																<div class="col s12 m12 l12" >
																	<textarea id="comment_bid" style="height: 5.3rem;" class="border_cs" maxlength="200" name="comment_bid" rows=5 placeholder="COMENTARIOS"></textarea>
																</div>
															</div>
															<div class="row no-margin-bottom">
																<div style="padding: 0 0rem;" class="col l9 s12 s12 right">
																	<div class="col s8 m8 l8 right">
																		<a id="submit_bid" class="waves-effect waves-light col s12 m12 l12 green bold600 btn gb_noboxshadow">OFERTAR</a>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>									
								</div>
							</div>
						</div>
					</div>
					<div class="col l6 s12">  <!-- RIGHT SIDE -->
						<div class="row">
							<span class="date_current"></span>
							<div style="margin-top: 2em;">
								<div style="position: relative; ">
									<p style="font-weight: 300;" class="size45" >Número de ofertas totales:  </p>
									<p id="boxdigits" class="med-light size45 digitsBox" > </p>
								</div>
								<p style="line-height: 1em;" >Últimas ofertas: </p> 
								<div id="bid_div">
									
								</div>
								<p id="showMoreButton" class="showMore">Ver más ofertas <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal auction notifications -->

		<div id="messageModal" class="modal border-radius-10">
			<div class="notification">
				<h4 style="text-align: center;" id="titleModal"></h4>
				<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmessageModal"></p>
			</div>
			<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
				<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
			</div>
		</div>
		<!-- ENF INFO SUBASTA -->
	</article>
@stop
@section('addJs')
	<script>
		$(document).ready(function(){
			serverdate = new Date(<?php echo time(); ?>*1000);
		});
	</script>
	<script src="{{ URL::asset('vendor/plugins/simple-gal.js') }}"></script>
	<script src="{{ URL::asset('vendor/plugins/jquery_date.js') }}"></script>
	<script src="{{ URL::asset('js/ofertas.js') }}"></script>
@stop