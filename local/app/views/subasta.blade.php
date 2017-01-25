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
				
				<div id="tab6" class="col s12">Test 3</div>
				<div id="tab7" class="col s12">Test 4</div>
				<div id="tab8" class="col s12">Test 5</div>
				<div id="tab9" class="col s12">Test 6</div>
				<div id="tab10" class="col s12">Test 7</div>
			</div>
		</div>
	</div>

	<!-- Start ¿Porque? -->
	<div id="tab4" class="bg_porque" >
		<div class="section" >
			<div class="row">
				<div class="col s12 txt_title">
					<p class="center-align">Inspiración en los sueños y en el <br>cantar del zwampath del barril.</p>
				</div>
				<div class="col l2 m10 s12 offset-l4 offset-m1">
					<p style="font-size: 1em; font-weight: 300; text-align: justify; line-height: 130%;" class="center-align light med-lineheight">Poseidón nace de la fuerza de la relación que tengo con el mar desde pequeño, esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasión entrelazan para dar forma material. Rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo.</p>
				</div>
				<div style="position: relative;">
					<img style="width: 40%; position: absolute; top:4.3em; left:0em; z-index: 100; padding-right: 6em" src="media/img/subasta/bg_porque2.png" alt="">
				</div>
			</div>
			<div class="row" style="margin-top: 0;">
				<div class="col l10 m12 s12 offset-l1 ">
					<div class="right">
						<div class="col l3 m10 s12 offset-l6 offset-m1">
							<p class="txt_left">
								El jefe buscó el éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo. El pinguino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a.
							</p>
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
				<div class="col l12">
					<section class="cd-horizontal-timeline">
						<div class="events-content">
							<ol>
								<li class="selected" data-date="16/01/2014">
									<h2>
									Todo comienza con los sueños, <br>
									es el punto de partida a un viaje interno.
									</h2>
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
	<!-- End ¿En Que Te Convierte? -->
@stop
@section('addJs')
<script src="js/esculturas.js"></script>
@stop