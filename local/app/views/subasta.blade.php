@extends('templates.main')
@section('content')
<style type="text/css">
	.auction-image{
		width: 80%;
		margin-left: 7%;
	}
	.thumb-auction{
		display: inline;
		margin: 0 0 10px 0;
		padding: 4px;
		width: 60px;
		border:2px solid white;
	}
	.thumb-auction.active{
		border:2px solid gray;
	}

	.thumbnails li{
		float: left;
		margin-right: 10px;
	}

	.collection-item{
		height: 65px;
	}

	.collection .collection-item.avatar {
		min-height: 40px;
	}

	span.title{
		font-weight: bold;
	}

	.no-left-border{
		border-left: none !important;
	}

	span.totalBids{
		border: 1px solid white;
		padding-right: 6px;
		padding-left: 4px;
		padding-top: 2px; 
	}

	p.bid-amount{
		font-weight: bold;
		font-size: 1.2rem;
		line-height: 1.5rem
	}

	.circle{
		border-radius: 10%;
	}

	.collection {
		border-bottom: 1px solid gray;
		border-top: 1px solid gray;
		height: 390px;
	}

	ul.showmore{
		height: 37em ;
		overflow: scroll;
		width: 99.9%;
	}

	.collection .collection-item{
		background: transparent;
		border-bottom: 1px solid gray;
		
	}

	.collection .collection-item.avatar .time {
		position: absolute;
		color: red;
		right: 16px;
		top: 8px;
	}

	.collection .collection-item.avatar .date {
		position: absolute;
		right: 16px;
		top: 30px;
	}

	p.digitsBox{
		position: absolute; 
		top: -15px; 
		right: 0;
		font-weight: 400;

	}

	p.showMore{
		line-height: 1em; float: right; margin-top: 0em; font-weight: bold; cursor: pointer;
	}

	label.error{
		margin-top: -10px;
		margin-bottom: 4px;
		color: red;
	}

	@media only screen and (max-width : 600px) {
		p.size45{
			font-size: 1.5em;
		}
	}

	.modal .notification {
		padding: 2rem 3rem 0px;
	}


	.contract input[type=text],
	.contract input[type=email],
	.contract textarea{
		height: 2.2rem;
		width: 100%;
	}

	/* Text inputs */

	.contract input[type=text],
	.contract input[type=email],
	.contract textarea{
		margin: 0 0 10px 0;
	}
	
textarea {
	margin: 0 0 10px 0;
}	


</style>

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
		
			</div>
		</div>
	</div>

	<!-- Start ¿Porque? -->
	<div id="tab4" class="bg_porque">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row gb_bottom_x7">
					<div class="col s12 l12">
						<div class="row">
							<div class="col s12 m12 l12 center light">
								<p class="gb_top_x6 gb_top_left_x4" style="margin-bottom: 0rem;">{{$submodule_section_data->TitlePorQue}}</p>
							</div>
						</div>
						<div class="row gb_bottom_x7">
							<div class="col s12 m12 l4">
								<img src="media/img/subasta/{{$submodule_section_data->Img_porque_german}}" alt="" class="gb_top_x1 img_ga_pq">
							</div>
							<div class="col s12 m12 l2 offset-l2 gb_mg">
								<p class="gb_line_x1 gb_gray">{{$submodule_section_data->Desc1PorQue}}</p>
							</div>
							<div class="col s12 m12 l2 offset-l4 gb_top_x7 gb_mg2">
								<p class="gb_line_x1 gb_gray">{{$submodule_section_data->Desc2PorQue}}</p>
							</div>
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
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="row">
							<div class="col s12 l4">
								<img class="hide-on-med-and-down responsive-img gb_img_piece1 gb_bottom_x8" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="">
							</div>
							<div class="col s12 l4">
								<div class="row">
									<div class="gb_content_text1">
										<div class="gb_content_line">
											<img class="hide-on-med-and-down responsive-img gb_img_line1" src="media/img/subasta/bg_line1.png" alt="">
										</div>
										<h4 class="light gb_gray right-align">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
										<p class="light left-align line_piece1">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
									</div>
								</div>
								<div class="row">
									<div class="gb_content_text2">
										{{$submodule_section_data->SeccionEncabezadoEnQueTeConvierte}}
										<!-- <h4>Fuerza, <span>templanza y resistencia</span></h4>
										<div class="gb_content_head gb_content_left">
											<span>ante la adversidad de la noche.</span>
										</div> -->
									</div>
								</div>
								<div class="row">
									<div class="gb_content_text3">
										<div class="gb_content_line">
											<img class="hide-on-med-and-down gb_img_line2" src="media/img/subasta/bg_line2.png" alt="">
										</div>
										<h4 class="light gb_gray left-align">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
										<p class="light left-align">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>
									</div>
								</div>
							</div>
							<div class="col 12 l4">
								<img class="hide-on-med-and-down responsive-img gb_img_piece2 gb_bottom_x8 gb_piece_x2" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}" width="400" height="300" alt="">
							</div>
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

	<!-- INFO SUBASTA -->


	<div style="background-image:url('media/img/subasta/bg_comingsoon.jpg'); background-size: cover;" id="tab9">
		<div  class="container">
			<div class="row no-margin-bottom" style="padding-top: 4%;" >
				<div class="col l6 s12"> <!-- LEFT SIDE -->
					<div style="padding: 10px 0 0 20px; border: 1px solid black; border-radius: 5px;">
						<span class="gb_title_auction">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
						<div class="row">
							<ul class="thumbnails col l2 s12">
								@foreach ($auctionpics as $key => $value)
									@if($key == 0)
										<li>
											<a href="media/img/subasta_esculturas/{{$value->name}}">
												<img src="media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction active" alt="Thumbnail">
											</a>
										</li>
									@else
										<li>
											<a href="media/img/subasta_esculturas/{{$value->name}}">
												<img src="media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction" alt="Thumbnail">
											</a>
										</li>
									@endif
								@endforeach
							</ul>
							<div class="col l10 s12">
								@if($auctionpics)
									<div class="main-image">
										<img src="media/img/subasta_esculturas/{{$auctionpics[0]->name}}" alt="Placeholder" class="auction-image">
									</div>
								@endif
							</div>
						</div>
						<div style="margin-top: 52px; margin-bottom: 20px;" >
							<p class="small-lineheight">Poseidón Diseñado por <b>Germán Arzate</b> / 2016</p>
							<p class="small-lineheight">COLECCIÓN: <b>Mitologías Antigúas</b></p>
						</div>
					</div>
					<div class="row">
						<div style="padding: 10px; margin-top: 2em;"  >
							<form id="bidForm" class="white top_arrow_box whiteform contract">
								<p style="margin: 3px 0 5px 10px;  " class="size30">Me interesa esta escultura:</p>
								<div class="row no-margin-bottom">
									<div class="col s12">
										<div class="col s12 l4">
											<input id="name_bid" class="border_cs" maxlength="50" required type="text" name="name_bid" placeholder="NOMBRE">
										</div>
										<div class="col s12 l4">
											<input id="nick_bid" class="border_cs" maxlength="20" required type="text" name="nick_bid" placeholder="APODO">
										</div>
										<div class="col s12 l4">
											<input id="email_bid" class="border_cs" maxlength="50" required type="text" name="email_bid" placeholder="E-MAIL">
										</div>
									</div>
									<div class="col s12">
										<div class="col s12 l8">
											<textarea id="comment_bid" style="height: 100px;" class="border_cs" maxlength="200" name="comment_bid" rows=5 placeholder="COMENTARIOS"></textarea>
										</div>
										<div class="col l4">
											<div class="col s12">
												<div class="row no-margin-bottom">
													<input id="amount_bid" class="border_cs" maxlength="9" required type="text" name="amount_bid" placeholder="CANTIDAD">
												</div>
											</div>
											<button id="submitBid" style="font-weight: bold;" class="btn col l12 s6 left btn-small green waves-effect">OFERTAR</button>
										</div>
									</div>
								</div>
							</form>
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
							<p id="showMoreButton" class="showMore">Ver mas ofertas <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i> </p>
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
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col s12 l6">
						<div class="row">
							<div class="col s12 m12 l12 center">
								<div class="split-date">
									@foreach ($date_coming as $key=> $value)
									<span class="day">{{$value->Dia}}</span>
									<span class="month">{{$value->NombreMes}}</span>
									<span class="year">{{$value->Anio}}</span>
									@endforeach
								</div>
								<img class="responsive-img" style="margin-top: -1em" src="media/img/subasta/bg_calendar_comingsoon.png" alt="">
							</div>
						</div>
					</div>
					<div class="col s12 l6">
						<div class="row">
							<div class="col s12 m8 l6 right">
								<div class="row">
									<span id="" class="right gb_gray date_current hide-on-med-and-down"></span>
								</div>
							</div>
							<div class="col s12 m12 l12 gb_mlf_2" style="margin-left: -5.6em; margin-top: 2em;">
								<div class="row">
									<div class="col s12 m12 l7 gb_mlf_1 gb_mleft_x10 center gb_left" style="margin-left: 9rem;">
										@foreach ($date_coming as $key=> $value)
										<span class="light gb_color">El desarrollo de la próxima escultura comenzará a transmitirse el próximo {{$value->Dia}} de {{$value->NombreMes}} de {{$value->Anio}}, <br> y puedes seguirlo aquí.</span>
										@endforeach
									</div>
								</div>
								<div class="row">
									<div style="padding: 10px; margin-top: 2em;">
										<form id="FormCS" class="col s12 white gb_arrow_box" action="http://localhost:8080/site_german.git/subasta" method="post">
											<input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
											<p style="margin: 3px 0 5px 10px;">Me interesa recibir información sobre la próxima escultura:</p>
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
														<textarea id="comment" class="border_cs" maxlength="200" name="comment" rows=5 required placeholder="COMENTARIOS"></textarea>
													</div>
													<div class="col s12 l4">
														<button id="sendBtn" class="btn btn-large green waves-effect gb_mgr_2" type="submit">CONTÁCTENME</button>
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
	</div>
	<!-- End Coming Soon -->
@stop
@section('addJs')
<script src="vendor/plugins/simple-gal.js"></script>
<script>
	$(document).ready(function(){
		serverdate = new Date(<?php echo time(); ?>*1000);
	});
</script>
<script src="js/jquery_date.js"></script>
<script src="js/script.js"></script>
<script src="js/auction_bids.js"></script>
<script src="js/jquery_validate.js"></script>
<script src="js/subasta.js"></script>
@stop