@extends('templates.main')
@section('content')
	<div class="container">
		<div class="section">
			<div class="row"  style="margin-bottom: 0em;">
				<div class="col s12">
					<ul class="tabs black-tabs">
					@foreach($submodule as $submodule)
						<li class="tab"><a href="#tab{{ $submodule->id }}">{{ $submodule->name }}</a></li>
					@endforeach
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
							<img src="media/img/subasta/bg_porque2.png" alt="" class="responsive-img img_ga_pq">
						</div>
						<div class="col l3 s12">
							<p class="txt_desc">Poseidón nace de la fuerza de la relación que tengo con el mar desde pequeño, esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
						</div>
						<div class="col l3 s12 offset-l3">
							<p class="txt_desc">El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo. El pinguino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start ¿Porque? -->

	<!-- <div id="tab2" class="col s12">
		<div class="container no-pad-top" style="padding-left: 3vw;">
			<div class="row">
				<div class="col l12">
					<h5 style="font-size: 2.1em; padding-top: 9vw; font-weight: 500">
						Todo comienza con los sueños, <br>
						es el punto de partida a un viaje interno.
					</h5>
				</div>
				<div class="col l7">
					<div class="col l5" style="float: right;; padding-top: 4vw;">
						<h5 class="light">1. Concepto</h5>
						<p style="line-height: 140%">
							Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
      										<img src="media/img/subasta/bg_concepto.png" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">1. Concepto</h5>
											<p>
												Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
											</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/bg_concepto_2.png" width="591" height="600" alt="" class="img_proceso_2">
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
      										<img src="media/img/subasta/bg_concepto.png" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">2. Sueños</h5>
											<p>
												Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
											</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/bg_suenos.png" width="591" height="600" alt="" class="img_proceso_3">
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
      										<img src="media/img/subasta/bg_concepto.png" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">3. Magia</h5>
											<p>
												Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
											</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/bg_magia.png" width="591" height="600" alt="" class="img_proceso_3">
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
      										<img src="media/img/subasta/bg_concepto.png" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">4. Pasión</h5>
											<p>
												Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
											</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/bg_pasion.png" width="591" height="600" alt="" class="img_proceso_3">
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
      										<img src="media/img/subasta/bg_concepto.png" width="250" height="250" alt="" class="img_proceso">
										</div>
										<div class="col l3" style="padding-top: 4vw;">
											<h5 class="light">5. Luz</h5>
											<p>
												Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey gordo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.
											</p>
										</div>
										<div class="col l5">
      										<img src="media/img/subasta/bg_luz.png" width="591" height="600" alt="" class="img_proceso_3">
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
										<li><a href="#0" data-date="16/01/2014" class="selected">CONCEPTO</a></li>
										<li><a href="#0" data-date="28/02/2014">SUEÑOS</a></li>
										<li><a href="#0" data-date="20/04/2014">MAGIA</a></li>
										<li><a href="#0" data-date="20/05/2014">PASIÓN</a></li>
										<li><a href="#0" data-date="09/07/2014">LUZ</a></li>
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
								<h4 class="right light">Autoridad</h4>
								<p style="" class="right light med-lineheight">Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma.</p>
							</div>
							<div class="row">
								<div class="col s12 l12 font_head_style">
									<p class="font_subhead_hp"><span class="font_head_h">Fuerza, </span>templanza y resistencia <br><span class="font_subhead_h"> ante la adversidad de la noche.</span></p>
								</div>
								<div class="row">
									<div class="col s12">
									<h4 class="center light">Visión</h4>
									<p style="" class="right light med-lineheight">Esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma.</p>
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
							<img class="responsive-img" src="media/img/subasta/bg_convierte.png" width="400" height="300" alt="">
						</div>
						<div class="col l3">
							<h5 class="txt_head">Materiales</h5>
							<p style="font-size: 1em; font-weight: 300; text-align: justify; line-height: 130%;" class="center-align light med-lineheight">Poseidón nace de la fuerza de la relación que tengo con el mar desde pequeño, esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
						</div>
						<div class="col l4 s12">
							<div class="row">
								<div class="col l3">
									<a class="modal-trigger" href="#modal1"><img class="circle responsive-img" src="media/img/subasta/bg_circle1.png" width="139" height="139" alt=""></a>
									<h5 class="light txt_fright">41%</h5>
								</div>
							</div>
							<div class="row">
								<div class="col l3 s12">
									<a class="modal-trigger" href="#modal2"><img class="circle responsive-img img_right" src="media/img/subasta/bg_circle2.png" width="139" height="139" alt=""></a>
									<h5 class="light txt_fright">26%</h5>
								</div>
							</div>
							<div class="row">
								<div class="col l3 s12" style="margin-left: -2em;">
									<a class="modal-trigger" href="#modal3"><img class="circle responsive-img" src="media/img/subasta/bg_circle3.png" width="139" height="139" alt=""></a>
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
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="col s6 right">
								<span class="right gb_gray">Lunes 30 de enero de 2017 | 13:00 hrs</span>
							</div>
						</div>
						<div class="row">
							<div class="col s6 center">
								<div class="split-date">
									<span class="day">31</span>
									<span class="month">Enero</span>
									<span class="year">2017</span>
								</div>
								<img class="responsive-img" style="margin-top: -4em" src="media/img/subasta/bg_calendar_comingsoon.png" alt="">
							</div>
							<div class="col s6 gb_mlf_1 center">
								<div class="row">
									<div class="col s12">
										<div class="row">
											<div class="col s6 offset-s3">
												<span class="light gb_color">El desarrollo de la próxima escultura comenzará a transmitirse el próximo 21 de febrero de 2017, y puedes seguirlo aquí.</span>
											</div>
										</div>
										<div class="row">
											<div class="col s12 white gb_arrow_box">
												<form id="" class="col s12" action="" method="post">
													<div class="row">
														<div class="input-field col s12">
															<label for="info" class="txtLabelInfo">Me interesa recibir información sobre la próxima escultura:</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s4">
															<input id="name" class="border_cs" type="text" name="name" placeholder="NOMBRE">
														</div>
														<div class="input-field col s4">
															<input id="email" class="border_cs" type="email" name="email" placeholder="E-MAIL">
														</div>
														<div class="col s4">
															<select class="browser-default gb_mrg_1 gb_gray_2">
																<option value="" disabled selected>CIUDAD</option><i class="material-icons">keyboard_arrow_down</i>
																<option value="1">Option 1</option>
																<option value="2">Option 2</option>
																<option value="3">Option 3</option>
															</select>
														</div>
														<div class="input-field col s8">
															<textarea id="comment" class="border_cs" rows=5 placeholder="COMENTARIOS"></textarea>
														</div>
														<div class="input-field col s4">
															<button id="sendBtn" class="btn_cs btn_large_cs gb_mgr_2">CONTÁCTENME</button>
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
	</div>
	<!-- End Coming Soon -->
@stop
@section('addJs')
<script src="js/esculturas.js"></script>
<script>
	$(document).ready(function(){
		$('.materialboxed').materialbox();
		$('.modal_md').modal();
		$('select').material_select();
	});
</script>
@stop