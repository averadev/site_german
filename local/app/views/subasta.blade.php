@extends('templates.main')
@section('content')
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
					<ul class="tabs black-tabs">
						<li class="tab"><a href="#tab4">¿Por Qué?</a></li>
						<li class="tab"><a href="#tab5">El Proceso</a></li>
						<li class="tab"><a href="#tab6">¿En Qué Te Convierte?</a></li>
						<li class="tab"><a href="#tab7">Especificaciones</a></li>
						<li class="tab"><a href="#tab8">Comentarios</a></li>
						<li class="tab"><a href="#tab9">Subasta</a></li>
						<li class="tab"><a href="#tab10">Próximamente</a></li>
					</ul>
				</div>
				<div id="tab9" class="col s12">Test 6</div>
			</div>
		</div>
	</div>

	<!-- Start ¿Porque? -->
	<div id="tab4" class="bg_porque">
		<div class="section">
			<div class="row">
				<div class="col s12 l12">
					<div class="row">
						<div class="col s12 l12 center light">
							<p class="gb_top_x6">{{$submodule_section_data->TitlePorQue}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 l4 m4">
							<img src="media/img/subasta/{{$submodule_section_data->Img_porque_german}}" alt="" class="img_ga_pq">
						</div>
						<div class="col s12 l3 m4">
							<p class="txt_desc">{{$submodule_section_data->Desc1PorQue}}</p>
						</div>
						<div class="col s12 l3 m4 offset-l3">
							<p class="txt_desc">{{$submodule_section_data->Desc2PorQue}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start ¿Porque? -->

	<!-- Start Proceso -->
	<div id="tab5" class="bgg_proceso">
		<div class="section" style="padding-left: 3vw;">
			<div class="container">
				<div class="row">
					<div class="col s12 l12">
						<section class="cd-horizontal-timeline">
							<div class="events-content">
								<ol>
									<li class="selected" data-date="16/01/2014">
										<div class="col s12">
											<div class="row">
												<div class="col s12 m10">
													<p>{{$submodule_section_data->SeccionTituloProceso}}</p>
												</div>
											</div>
											<div class="row">
												<div class="col l4">
		      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
												</div>
												<div class="col l3">
													<h5 class="light">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
													<p>{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
												</div>
												<div class="col l5">
		      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}" width="591" height="600" alt="" class="hide-on-med-and-down img_proceso_2">
												</div>
											</div>
										</div>
									</li>

									<li data-date="28/02/2014">
										<p>{{$submodule_section_data->SeccionTituloProcesoSuenos}}</p>
										<div class="row">
											<div class="col l4">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
											</div>
											<div class="col l3">
												<h5 class="light">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
												<p>{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
											</div>
											<div class="col l5">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}" width="591" height="600" alt="" class="hide-on-med-and-down img_proceso_3">
											</div>
										</div>
									</li>

									<li data-date="20/04/2014">
										<p>{{$submodule_section_data->SeccionTituloProcesoMagia}}</p>
										<div class="row">
											<div class="col l4">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
											</div>
											<div class="col l3">
												<h5 class="light">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
												<p>{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
											</div>
											<div class="col l5">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}" width="591" height="600" alt="" class="hide-on-med-and-down img_proceso_3">
											</div>
										</div>
									</li>

									<li data-date="20/05/2014">
										<p>{{$submodule_section_data->SeccionTituloProcesoPasion}}</p>
										<div class="row">
											<div class="col l4">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
											</div>
											<div class="col l3">
												<h5 class="light">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
												<p>{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
											</div>
											<div class="col l5">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}" width="591" height="600" alt="" class="hide-on-med-and-down img_proceso_3">
											</div>
										</div>
									</li>

									<li data-date="09/07/2014">
										<p>{{$submodule_section_data->SeccionTituloProcesoLuz}}</p>
										<div class="row">
											<div class="col l4">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
											</div>
											<div class="col l3">
												<h5 class="light">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
												<p>{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
											</div>
											<div class="col l5">
	      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}" width="591" height="600" alt="" class="hide-on-med-and-down img_proceso_3">
											</div>
										</div>
									</li>

								</ol>
							</div> 
							<!-- .events-content -->

							<!-- Start .timeline -->
							<div class="timeline">
								<!-- Start .events-wrapper -->
								<div class="events-wrapper">
									<div class="events">
										<ol>
											<li><a href="#0" data-date="16/01/2014" class="selected">{{$submodule_section_data->SeccionSubTProcesoConcepto}}</a></li>
											<li><a href="#0" data-date="28/02/2014">{{$submodule_section_data->SeccionSubTProcesoSuenos}}</a></li>
											<li><a href="#0" data-date="20/04/2014">{{$submodule_section_data->SeccionSubTProcesoMagia}}</a></li>
											<li><a href="#0" data-date="20/05/2014">{{$submodule_section_data->SeccionSubTProcesoPasion}}</a></li>
											<li><a href="#0" data-date="09/07/2014">{{$submodule_section_data->SeccionSubTProcesoLuz}}</a></li>
											<li><a href="#0" data-date="30/08/2014"></a></li>
											<li><a href="#0" data-date="15/09/2014"></a></li>
											<li><a href="#0" data-date="01/11/2014"></a></li>
											<li><a href="#0" data-date="10/12/2014"></a></li>
											<li><a href="#0" data-date="19/01/2015"></a></li>
											<li><a href="#0" data-date="03/03/2015"></a></li>
										</ol>
										<span class="filling-line" aria-hidden="true"></span>
									</div> <!-- .events -->
								</div> <!-- End .events-wrapper -->
							</div> 
							<!-- End .timeline -->
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Proceso -->

	<!-- Start ¿En Que Te Convierte? -->
	<div id="tab6" class="bg_queteconvierte">
		<div class="section">
			<div class="row">
				<div class="col s12 gb_bottom4">
					<div class="row">
						<div class="col s12 l4">
							<img class="hide-on-med-and-down responsive-img gb_img_piece1" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" width="369" height="765" alt="">
						</div>
						<div class="col s12 m4 l4">
							<div class="row">
								<div class="col s12 l5 gb_text_center">
									<h4 class="right light gb_top_x3 gb_bottom_x5 right-align">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
									<p class="right light med-lineheight right-align">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
								</div>
							</div>
							<div class="row">
								<div class="col s12 m4 l12">
									<p class="gb_top_x3">{{$submodule_section_data->SeccionEncabezadoEnQueTeConvierte}}</p>
								</div>
								<div class="row">
									<div class="col s12">
										<h4 class="center light gb_bottom_x6">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
									</div>
									<div class="col s12 m6 l4 offset-l5">
										<p class="right light med-lineheight">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col s12 l4">
							<img class="hide-on-med-and-down responsive-img gb_img_piece2" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}" width="400" height="300" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End ¿En Que Te Convierte? -->

	<!-- Start Especificaciones -->
	<div id="tab7" class="bg_especificaciones">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="col s12 col m6 col l10 offset-l1 light">
								<p class="gb_top_x3">{{$submodule_section_data->SeccionEncabezadoEspecificaciones}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col s12 col m6 col l4 offset-l1">
								<img class="responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones}}" alt="">
							</div>
							<div class="col s12 col m6 col l3">
								<div class="gb_top_x3">
									<h5 class="">{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
									<p style="" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>
								</div>
							</div>
							<div class="col l4 s12">
								<div class="row">
									<div class="col l3">
										<a class="modal-trigger" href="#modal1"><img class="hide-on-med-and-down circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" width="139" height="139" alt=""></a>
										<h5 class="hide-on-med-and-down light txt_fright">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h5>
									</div>
								</div>
								<div class="row">
									<div class="col l3 s12">
										<a class="modal-trigger2" href="#modal2"><img class="hide-on-med-and-down circle responsive-img img_right" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" width="139" height="139" alt=""></a>
										<h5 class="hide-on-med-and-down light txt_fright">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h5>
									</div>
								</div>
								<div class="row">
									<div class="col l3 s12" style="margin-left: -2em;">
										<a class="modal-trigger3" href="#modal3"><img class="hide-on-med-and-down circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" width="139" height="139" alt=""></a>
										<h5 class="hide-on-med-and-down light txt_fright" style="margin-right: -7em">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Modal -->
				<div id="modal1" class="modal_md">
					<div class="modal_dialog">
						<div class="modal_content">
							<h3>{{$submodule_section_data->SecccionTiuloEspecificacion1}}</h3>
							<p>{{$submodule_section_data->SecccionDescEspecificacion1}}</p>
							<div class="col l4 center">
								<img class="responsive-img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion1}}" alt="">
							</div>
							<!-- modal close button -->
							<a href="#" class="modal_close btn_modal_close modal-close">x</a>
						</div>
					</div>
				</div>

				<div id="modal2" class="modal_md">
					<div class="modal_dialog">
						<div class="modal_content">
							<h3>{{$submodule_section_data->SecccionTiuloEspecificacion2}}</h3>
							<p>{{$submodule_section_data->SecccionDescEspecificacion2}}</p>
							<div class="col l4 center">
								<img class="responsive-img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion2}}" alt="">
							</div>
							<!-- modal close button -->
							<a href="#" class="modal_close btn_modal_close modal-close">x</a>
						</div>
					</div>
				</div>

				<div id="modal3" class="modal_md">
					<div class="modal_dialog">
						<div class="modal_content">
							<h3>{{$submodule_section_data->SecccionTiuloEspecificacion3}}</h3>
							<p>{{$submodule_section_data->SecccionDescEspecificacion3}}</p>
							<div class="col l4 center">
								<img class="responsive-img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion3}}" alt="">
							</div>
							<!-- modal close button -->
							<a href="#" class="modal_close btn_modal_close modal-close">x</a>
						</div>
					</div>
				</div>
				<!-- End Modal -->
			</div>
		</div>
	</div>
	<!-- End Especificaciones -->

	<!-- Start Comments -->
	<div class="bg_porque">
		<div id="tab8" class="parallax-container">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="s12 m6 l12 center" style="margin-top: 1rem;">
							<span class="size-x4">Comentarios</span>
						</div>
					</div>
					<div class="row">
						<div class="s12 m6 l12">
							<p style="color: #2d332c;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid optio illum quo fuga tempore, pariatur animi consectetur ex repudiandae delectus? Harum aliquid repellat tempora, quod atque saepe numquam sed cum.</p>
							<br>
							<p style="color: #2d332c;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est veritatis amet, qui iste asperiores dignissimos odit nam doloremque minus, at obcaecati quas delectus repudiandae quidem maxime, dicta, molestiae ex cumque!</p>
							<br>
							<p style="color: #2d332c;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel beatae quos eaque saepe eum, placeat enim temporibus. Eius, porro! Sint, magnam doloremque. Nulla velit voluptate sed explicabo repellat, debitis itaque.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Comments -->

	<!-- Start Coming Soon -->
	<div id="tab10" class="bg_comingsoon">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="col s12 m8 l6 right">
								<span id="date_current" class="right gb_gray"></span>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m12 l6 center">
								<div class="split-date">
									<span class="day">31</span>
									<span class="month">Enero</span>
									<span class="year">2017</span>
								</div>
								<img class="responsive-img" style="margin-top: -4em" src="media/img/subasta/bg_calendar_comingsoon.png" alt="">
							</div>
							<div class="col s12 m12 l6">
								<div class="row">
									<div class="col s12 m12 l6 gb_mlf_1 gb_mleft_x10 center" style="margin-left: 10rem;">
										<span class="light gb_color">El desarrollo de la próxima escultura comenzará a transmitirse el próximo 21 de febrero de 2017, y puedes seguirlo aquí.</span>
									</div>
								</div>
								<div class="row">
									<div class="col s12 white gb_arrow_box">
										<form id="FormCS" class="col s12" action="#" method="post">
											<div class="row">
												<div class="input-field col s12 m10 l12">
													<label for="info" class="txtLabelInfo">Me interesa recibir información sobre la próxima escultura:</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12 l4">
													<input id="name" class="border_cs" type="text" name="name" placeholder="NOMBRE">
												</div>
												<div class="input-field col s12 l4">
													<input id="email" class="border_cs" type="email" name="email" placeholder="E-MAIL">
												</div>
												<div class="input-field col s12 l4">
													<input id="autocomplete" class="border_cs" type="text" name="city" placeholder="CIUDAD">
												</div>
												<div class="input-field col s12 l8">
													<textarea id="comment" class="border_cs" name="comment" rows=5 placeholder="COMENTARIOS"></textarea>
												</div>
												<div class="input-field col s12 l4">
													<button id="sendBtn" class="btn btn-large green gb_mgr_2" type="submit">CONTÁCTENME</button>
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
	</div>
	<!-- End Coming Soon -->
@stop
@section('addJs')
<script>
	$(document).ready(function(){
		$('.materialboxed').materialbox();
		$('.modal_md').modal();
		$('select').material_select();
	});
</script>
<script src="js/jquery_date.js"></script>
<!-- <script src="js/jquery.validate.min.js"></script>
<script src="js/jquery_validate.js"></script> -->
@stop