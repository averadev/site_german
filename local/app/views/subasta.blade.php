@extends('templates.main')
@section('content')
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
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
				<div id="tab8" class="col s12">Test 5</div>
				<div id="tab9" class="col s12">Test 6</div>
			</div>
		</div>
	</div>

	<!-- Start ¿Porque? -->
	<div id="tab4" class="bg_porque">
		<div class="section">
			<div class="row">
				<div class="col l12 s12">
					<div class="row">
						<div class="col l12 s12 center light font_head_style">
							<p class="font_subhead_hp"><span class="font_head_h">Inspiración </span>en los sueños y en el <br><span class="font_subhead_h"> cantar del zwampath del barril.</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col l4 s12">
							<img src="media/img/subasta/{{$submodule_section_data->Img_porque_german}}" alt="" class="responsive-img img_ga_pq">
						</div>
						<div class="col l3 s12">
							<p class="txt_desc">{{$submodule_section_data->Desc1PorQue}}</p>
						</div>
						<div class="col l3 s12 offset-l3">
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
		<div class="container no-pad-top" style="padding-left: 3vw;">
			<div class="row">
				<div class="col l12 s12">
					<section class="cd-horizontal-timeline">
						<div class="events-content">
							<ol>
								<li class="selected" data-date="16/01/2014">
									<div class="font_head_style_proceso">
										<h3 class="font_subhead_h">Todo comienza con los <span class="font_head_h">sueños, </span><br><span class="font_subhead_h"> es el punto de partida a un viaje interno.</span></h3>
									</div>
									<div class="row">
										<div class="col l4">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
											<p>{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}" width="591" height="600" alt="" class="img_proceso_2">
										</div>
									</div>
								</li>

								<li data-date="28/02/2014">
									<h2>
									Todo comienza con los sueños, <br>
									es el punto de partida a un viaje interno.
									</h2>
									<div class="row">
										<div class="col l4">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
											<p>{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}" width="591" height="600" alt="" class="img_proceso_3">
										</div>
									</div>
								</li>

								<li data-date="20/04/2014">
									<h2>
									Todo comienza con los sueños, <br>
									es el punto de partida a un viaje interno.
									</h2>
									<div class="row">
										<div class="col l4">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
											<p>{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}" width="591" height="600" alt="" class="img_proceso_3">
										</div>
									</div>
								</li>

								<li data-date="20/05/2014">
									<h2>
									Todo comienza con los sueños, <br>
									es el punto de partida a un viaje interno.
									</h2>
									<div class="row">
										<div class="col l4">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
											<p>{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}" width="591" height="600" alt="" class="img_proceso_3">
										</div>
									</div>
								</li>

								<li data-date="09/07/2014">
									<h2>
									Todo comienza con los sueños, <br>
									es el punto de partida a un viaje interno.
									</h2>
									<div class="row">
										<div class="col l4">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
											<p>{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}" width="591" height="600" alt="" class="img_proceso_3">
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
							
							<!-- Start .cd-timeline-navigation -->
							<!-- <ul class="cd-timeline-navigation">
								<li><a href="#0" class="prev inactive">Prev</a></li>
								<li><a href="#0" class="next">Next</a></li>
							</ul>  --> <!-- End .cd-timeline-navigation -->
						</div> <!-- End .timeline -->
					</section>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Proceso -->

	<!-- Start ¿En Que Te Convierte? -->
	<div id="tab6" class="bg_queteconvierte">
		<div class="section">
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="col s4 l4">
							<img class="responsive-img img_queteconvierte1" src="media/img/subasta/bg_pieza1.png" width="300" height="300" alt="">
						</div>
						<div class="col s4 l4 center">
							<div class="col s5">
								<h4 class="right light">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
								<p style="" class="right light med-lineheight">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
							</div>
							<div class="row">
								<div class="col s12 l12 font_head_style">
									<p class="font_subhead_hp"><span class="font_head_h">Fuerza, </span>templanza y resistencia <br><span class="font_subhead_h"> ante la adversidad de la noche.</span></p>
								</div>
								<div class="row">
									<div class="col s12">
									<h4 class="center light">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
									<p style="" class="right light med-lineheight">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>
								</div>
								</div>
							</div>
						</div>
						<div class="col s4 l4">
							<img class="responsive-img img_queteconvierte2" src="media/img/subasta/bg_pieza2.png" width="400" height="300" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End ¿En Que Te Convierte? -->

	<!-- Start Especificaciones -->
	<div id="tab7" class="bg_especificaciones">
		<div class="section">
			<div class="row">
				<div class="col l12 s12">
					<div class="row">
						<div class="col l12 s12 offset-l2 light font_head_style">
							<p class="font_subhead_hp"><span class="font_head_h">Calidad, </span>durabilidad y resistencia <br><span class="font_subhead_h"> ante la adversidad de la noche.</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col l4 s12 offset-l1">
							<img class="responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones}}" width="400" height="300" alt="">
						</div>
						<div class="col l3">
							<h5 class="txt_head">{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
							<p style="font-size: 1em; font-weight: 300; text-align: justify; line-height: 130%;" class="center-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>
						</div>
						<div class="col l4 s12">
							<div class="row">
								<div class="col l3">
									<a class="modal-trigger" href="#modal1"><img class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" width="139" height="139" alt=""></a>
									<h5 class="light txt_fright">41%</h5>
								</div>
							</div>
							<div class="row">
								<div class="col l3 s12">
									<a class="modal-trigger" href="#modal2"><img class="circle responsive-img img_right" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" width="139" height="139" alt=""></a>
									<h5 class="light txt_fright">26%</h5>
								</div>
							</div>
							<div class="row">
								<div class="col l3 s12" style="margin-left: -2em;">
									<a class="modal-trigger" href="#modal3"><img class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" width="139" height="139" alt=""></a>
									<h5 class="light txt_fright" style="margin-right: -7em">33%</h5>
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
						<h3>Resina</h3>
						<p>Sustancia orgánica de consistencia pastosa, pegajosa, transparente o traslúcida, que se solidifica en contacto con el aire es de origen vegetal o se obtiene artificialmente mediante reacciones de polimerización.</p>
						<div class="col l4 center">
							<img class="responsive-img" src="media/img/subasta/resina_material.png" alt="">
						</div>
						<!-- modal close button -->
						<a href="#" class="modal_close btn_modal_close">x</a>
					</div>
				</div>
			</div>

			<div id="modal2" class="modal_md">
				<div class="modal_dialog">
					<div class="modal_content">
						<h3>Resina</h3>
						<p>Sustancia orgánica de consistencia pastosa, pegajosa, transparente o traslúcida, que se solidifica en contacto con el aire es de origen vegetal o se obtiene artificialmente mediante reacciones de polimerización.</p>
						<div class="col l4 center">
							<img class="responsive-img" src="media/img/subasta/resina_material.png" alt="">
						</div>
						<!-- modal close button -->
						<a href="#" class="modal_close btn_modal_close">x</a>
					</div>
				</div>
			</div>

			<div id="modal3" class="modal_md">
				<div class="modal_dialog">
					<div class="modal_content">
						<h3>Resina</h3>
						<p>Sustancia orgánica de consistencia pastosa, pegajosa, transparente o traslúcida, que se solidifica en contacto con el aire es de origen vegetal o se obtiene artificialmente mediante reacciones de polimerización.</p>
						<div class="col l4 center">
							<img class="responsive-img" src="media/img/subasta/resina_material.png" alt="">
						</div>
						<!-- modal close button -->
						<a href="#" class="modal_close btn_modal_close">x</a>
					</div>
				</div>
			</div>
			<!-- End Modal -->
		</div>
	</div>
	<!-- End Especificaciones -->

	<!-- Start Coming Soon -->
	<div id="tab10" class="bg_comingsoon">
		<div class="section">
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="col s6 right">
							<span class="right light">Lunes 30 de enero de 2017 | 13:00 hrs</span>
						</div>
					</div>
					<div class="row">
						<div class="col s6 center">
							<span style="position: absolute; margin-top: 5em; font-size: 2em; padding-left: 4em;">21 Febrero 2017</span>
							<img class="responsive-img" style="margin-top: -4em" src="media/img/subasta/bg_calendar_comingsoon.png" alt="">
						</div>
						<div class="col s6">
							<div class="row">
								<div class="col s12">
									<div class="row">
										<div class="col s4">
											<span class="light">El desarrollo de la próxima escultura comenzará a transmitirse el próximo 21 de febrero de 2017, y puedes seguirlo aquí.</span>
										</div>
									</div>
									<div class="row">
										<div class="col l8 white div_arrow">
											<form id="" class="col s12" action="" method="post">
												<label for="">Me interesa recibir información sobre la próxima escultura:</label>
												<div class="row">
													<div class="input-field col s4">
														<input id="name" class="" type="text" name="name" placeholder="NOMBRE">
													</div>
													<div class="input-field col s4">
														<input id="email" class="" type="email" name="email" placeholder="E-MAIL">
													</div>
													<div class="input-field col s4">
														<select>
															<option value="" disabled selected>Ciudad</option><i class="material-icons">keyboard_arrow_down</i>
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="input-field col s8">
														<textarea id="comment" class="materialize-textarea">Comentarios</textarea>
													</div>
													<div class="input-field col s4">
														<button id="sendBtn" class="btn_cs btn_large_cs">CONTÁCTENME</button>
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
@stop