@extends('templates.main')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/comingsoon.css') }}">
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">
			<div class="section">
				<div class="row" style="margin-bottom: 0em;">
					<div class="col s12">
						<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
						<nav id="navigation-menu" class="white">
							<ul class="tabs-menu">
								<li class="tab"><a class="tab1" href="#tab1">¿Por Qué?</a></li>
								<li class="tab"><a class="tab2" href="#tab2">El Proceso</a></li>
								<li class="tab"><a class="tab3" href="#tab3">¿En Qué Te Convierte?</a></li>
								<li class="tab"><a class="tab4" href="#tab4">Especificaciones</a></li>
								<li class="tab"><a class="tab5" href="#tab5">Comentarios</a></li>
								<li class="tab"><a class="tab6" href="#tab6">Subasta</a></li>
								<li class="tab"><a class="tab7" href="#tab7">Próximamente</a></li>
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

	<!-- Start Coming Soon -->
	<article id="tab7" class="scrollspy">
		<div class="hide-on-large-only">
			<br>
			<br>
			<br>
		</div>
		<div id="" class="bg_comingsoon">
			<div class="container" style="padding-bottom: 0.5%">
				<div class="row no-margin-bottom">
					<div class="col s12 l5 margin-left-4">
						<div class="row">
							<div class="col s12 m12 l12 center" style="position: relative;">
									<div style="position: absolute; top: 27%; height: 100px; left: 50%;">
										<div style="position: relative; left: -50%;">
											@foreach ($date_coming as $key=> $value)
											<div class="col s6 " style="height: 100px;">
												<p class="fontCrimson" style="text-align: right; line-height: 80%; font-size: 500%; font-weight: bold; margin-top: 0%; margin-bottom: 0%">{{$value->Dia}}</p>
											</div>
											<div class="col s6" style="height: 100px; margin-left: -8%;">
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0%; text-transform: uppercase;">{{$value->NombreMes}}</p>
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0%">{{$value->Anio}}</p>
											</div>
											@endforeach
										</div>
									</div>
								<img style="width: 100%" src="../media/img/subasta/bg_calendar_comingsoon.png" alt="">
							</div>
						</div>
					</div>
					<div class="col s12 l6">
						<div class="row">
							<div class="col s12">
								<div class="row">
									<p class="gb_gray date_current" style="margin-top: 6em;"></p>
								</div>
							</div>
							<div class="col s12 m12 l12 margin-top-20">
								<div class="row">
									<div class="col s12">
										@foreach ($date_coming as $key=> $value)
										<p style="text-align: center;" class="light text-proxim">El desarrollo de la próxima <br> escultura comenzará a <br> transmitirse el próximo {{$value->Dia}} de <br> {{$value->NombreMes}} de {{$value->Anio}}, <br> y puedes seguirlo aquí.</p>
										@endforeach
									</div>
								</div>
								<div class="row">
									<div style="">
										<form style="padding-bottom: 12px;" id="FormCS" class="col s12 gb_arrow_box whiteform contract" action="{{URL::to('/subasta/coming')}}" method="post">
											<input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
											<p class="gb_textcs_x1" style="margin: 3px 0 5px 10px;">Me interesa recibir información sobre la próxima escultura:</p>
											<div class="row no-margin-bottom">
												<div class="col s12">
													<div class="col s12 l4">
														<input id="name" class="border_cs" type="text" name="name" required placeholder="NOMBRE">
													</div>
													<div class="col s12 l4">
														<input id="email" class="border_cs" type="email" name="email" required placeholder="E-MAIL">
													</div>
													<div class="col s12 l4">
														<input id="city" class="border_cs" type="text" name="city" required placeholder="CIUDAD">
													</div>
												</div>
												<div class="col s12">
													<div class="col s12 l8">
														<textarea id="comment" style="height: 80px;" class="border_cs" maxlength="200" name="comment" rows=5 required placeholder="COMENTARIOS"></textarea>
													</div>
													<div class="col s12 l4">
														<button id="sendBtn" class="btn btn-small col s12 green waves-effect margin-top-13 gb_noboxshadow" type="submit">CONTÁCTENME</button>
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
		<!-- Start Modal Proximamente Form -->
		<div id="msgModal" class="modal border-radius-10">
			<div class="notification">
				<h4 style="text-align: center;" id="titleModalMsg"></h4>
				<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
			</div>
			<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
				<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
			</div>
		</div>
		<!-- End Modal Proximamente Form -->
		<!-- End Coming Soon -->
	</article>
@stop
@section('addJs')
<script src="{{ URL::asset('vendor/plugins/simple-gal.js') }}"></script>
<script src="{{ URL::asset('js/jquery.smooth.js') }}"></script>
<script>
$(document).ready(function(){
	serverdate = new Date(<?php echo time(); ?>*1000);
});
</script>
<script src="{{ URL::asset('js/coming.js') }}"></script>
<script src="{{ URL::asset('js/jquery_date.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/auction_bids.js') }}"></script>
<script src="{{ URL::asset('js/jquery_validate.js') }}"></script>
<script src="{{ URL::asset('js/subasta.js') }}"></script>
@stop