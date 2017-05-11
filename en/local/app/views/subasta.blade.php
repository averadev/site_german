@extends('templates.main')
@section('content')
<style type="text/css">
	.center-abs-div {
		position: absolute;
		left: 50%;
		top: 45%;
		transform: translate(-50%, -50%);
	}

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

	.modal_content{
		padding: 2rem 2rem 0.5rem 2rem;
	}
	
	.modal_img{
		width: 100%;
		padding-bottom: 0%;
		margin-bottom: 0%;
		display: block;
	}

	.modal_md {
		display: none;
		position: fixed;
		left: 0;
		right: 0;
		background-color: #fafafa;
		padding: 0;
		max-height: 70%;
		width: 40%;
		margin: auto;
		overflow-y: auto;
		border-radius: 2px;
	}	

	textarea {
		margin: 0 0 10px 0;
	}
	.img_proceso {
		margin-top: 50px;
		padding-bottom: 10px;
		margin-bottom: 50px;
		width: 250px;
	}

	h5.proceso_top{
		margin-top: 30px;
		font-size: 1.6rem;
		line-height: 100%;
		color: #2f332f;
	}
	.img2_proceso{
		width: 500px;
		margin-top: -30%;
		margin-left: 12%
	}

	.top-pad-80{
		padding-top: 80px;
	}
	.top-pad-70{
		padding-top: 70px;
	}

	.text-padding{
		padding-left: 5% !important ;
	}

	.events-content{
		height: 690px;
	}

	.events{
		min-width: 350px;
	}

	img.espec-img{
		position: absolute;
		left: 25%;
		width: 110%; 
	}

	.spec-marg-btm{
		position: relative;
		margin-bottom: 110%; 
	}

	.title-convierte{
		font-family: 'Crimson Text';
		font-style: italic; line-height: 250%;
		text-indent: -7rem; 		
		margin-left: 35%;
		margin-top: 50px; 
	}

	.text-proxim {
		font-family: "Crimson Text";
		font-size: 1.5rem;
		color: #363b35;
		font-weight: 600;
		line-height: 110%
	}

	.margin-top-20{
		margin-top: 20%;
	}

	.margin-left-4{
		margin-left: 4%;
	}

	.margin-top-13{
		margin-top: 13% ;
	}

	.date_current{
		text-align: right;
		padding-right: 2rem;
	}


	@media only screen and (max-width : 992px) {
		p.title-porque{
			text-indent: 0rem;
			margin-left: 0rem;
		}
	
		p.title-porque br{
			display: none;
		}
	
		/*Proceso*/
		p.title_proceso br{
			display: none;
		}
	
		p.title_proceso{
			text-indent: 0rem;
			margin-left: 0rem;
		}
	
		.top-pad-80{
			padding-top: 0px;
		}
		.top-pad-70{
			padding-top: 0px;
		}


		.img_proceso {
			margin-top: 10px;
			margin-bottom: 10px;
			width:70% ;
			display: block;
			margin: 0 auto;
		}

		.img2_proceso{
			width: 100%;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: 0px;			
		}

		li,ol{
			padding: 0px; 

		}

		.events-content{
			height: auto !important;
		}		

		.text-padding{
			padding-left: 0px; ;
		}

		.cd-horizontal-timeline .events-wrapper {
			/*move timeline*/
			position: relative;
			height: 100%;
			margin-top: 30px;
			margin-left: 15%;
			/*overflow: hidden;*/
		
		}
		.events-wrapper{
			width: 150px;
		}

		.events{
			max-width: 230px;
			min-width: 230px;
		}
		.cd-horizontal-timeline .events a {
			font-size: 70%;
		}

		#bidForm{
			padding-bottom: 15px;
		}

		/*Especificaciones*/
		p.title-espec{
			margin-left: 0%;
			font-family: 'Crimson Text';
			text-indent: 0rem;
		}
	
		p.title-espec br{
			display: none;
		}

		p.title-convierte{
			text-indent: 0rem;
			margin-left: 0%;
			margin-top: 10px;
			margin-bottom: 10px; 
		}
		p.title-convierte br{
			display: none;
		}	

		img.espec-img{
			position: static;
			left: 0;
			width: 100%; 
		}

		.spec-marg-btm{
			position: static;
			margin-bottom: 0%; 
		}

		.modal_md{
			width: 100%;
			max-height: 100%;
		}

		.margin-top-20{
			margin-top: 0%;
		}
		.margin-left-4{
			margin-left: 0%;
		}

		.margin-top-13{
			margin-top: 0%;
		}
		.gb_arrow_box:after, .gb_arrow_box:before {
			border: none;
		}

		.text-proxim {
			margin-bottom:4%;
			margin-top: 0%;
		}

		.date_current{
			text-align: center;
			padding-right: 0rem;
		}
	}
	.porcentaje {
		margin-top: 10% !important; 
		margin-bottom: 0% !important; 
		font-size: 42px !important; 
		font-family: inherit !important; 
		font-weight: 200 !important; 
		float: right !important;
	}
	.contenedor_submenu {
		position: fixed;
		width: 100%;
		height: 135px;
		background-color: #fff;
		top: 0;
		z-index: 10;
		margin-top: 4em;
	}
	#navigation-menu {
		box-shadow: none;
	}
	#navigation-menu a {
		color: #a6a6a6;
		font-size: 14px;
		font-weight: bold;
		text-transform: uppercase;
	}
	#navigation-menu a:hover, a.mPS2id-highlight {
		background-color: transparent;
		color: black !important;
		border-bottom: 2px solid black;
	}
	.tabs-menu {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
	}
	.tabs-menu {
		position: relative;
		overflow-x: auto;
		overflow-y: hidden;
		width: 100%;
		background-color: #fff;
		margin: 0 auto;
		white-space: nowrap;
	}
</style>
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">
			<div class="section">
				<div class="row" style="margin-bottom: 0em;">
					<div class="col s12">
						<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
						<nav id="navigation-menu" class="white">
							<ul class="tabs-menu">
								<li class="tab"><a class="" href="#tab1">¿Por Qué?</a></li>
								<li class="tab"><a class="" href="#tab2">El Proceso</a></li>
								<li class="tab"><a class="" href="#tab3">¿En Qué Te Convierte?</a></li>
								<li class="tab"><a class="" href="#tab4">Especificaciones</a></li>
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

	<!-- Start ¿Porque? -->
	<article id="tab1" class="scrollspy">
		<div class="hide-on-large-only">
			<br>
			<br>
			<br>
		</div>
		<div id="" class="bg_porque">
			<div class="hide-on-med-and-down" style="position: relative; z-index: 0;  height: 700px;"> <!-- Desktop -->
				<img src="media/img/subasta/{{$submodule_section_data->Img_porque_german}}" style="position: absolute; width: 800px; bottom: 0; z-index: -1; ">
				<div class="">
					<div class="section no-pad-bot">
						<div class="container">
							<div class="row">
								<div class="col s12 l12">
									<div class="row">
										<div class="col s12 m12 l12 center light">
											<p class="gb_top_x6 add-right-ident-x3 gb_top_left_x4 title-porque" style="margin-bottom: -1.5rem;">{{$submodule_section_data->TitlePorQue}}</p>
										</div>
									</div>
									<div class="row">
										<div class="col l12">
											<div class="col l6 right" style="margin-top: 0px;">
												<div class="col l5">
												<div class="row">
													<p class="gb_text_pqx1 gb_gray">{{$submodule_section_data->Desc1PorQue}}</p>	
												</div>												
												</div>
												<div class="col l5">
													<p class="gb_text_pqx2 gb_gray">{{$submodule_section_data->Desc2PorQue}}</p>	
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
			<div class="hide-on-large-only">
				<div class="row no-margin-bottom">
					<div class="col s12">
						<p style="margin-bottom: 0.5rem;" class="title-porque">{{$submodule_section_data->TitlePorQue}}</p>
					</div>
					<img src="media/img/subasta/{{$submodule_section_data->Img_porque_german}}" style="width: 95%; display: block; margin: 0 auto; " >
					<div class="col s12">
						<p class="justify-text gb_gray">{{$submodule_section_data->Desc1PorQue}}</p>
						<p class="justify-text gb_gray">{{$submodule_section_data->Desc2PorQue}}</p>
					</div>
				</div>
			</div>
		</div>
		</article>
	<!-- End ¿Porque? -->

	<!-- Start Proceso -->
	<article id="tab2" class="scrollspy">
		<div id="" class="bgg_proceso">
			<div class="">
				<div class="">
					<div class="">
						<div class="">
							<section class="cd-horizontal-timeline" style="position: relative;">
								<div class="events-content">
									<ol>
										<li class="selected" data-date="16/01/2014">
											<div class="container top-pad-80">
												<div class="row">
													<div class="col l12 s12">
														<p class="title_proceso">{{$submodule_section_data->SeccionTituloConcepto}}</p>
													</div>
													<div class="col l4 s12 ">
			      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso" >
													</div>
													<div class="col l3 s12 text-padding" >
														<h5 class="light proceso_top">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
														<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
													</div>
													<div class="col l5 s12">
														<img class="hide-on-med-and-down img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}">
													</div>
												</div>
											</div>
										</li>
										<li data-date="28/02/2014">
											<div class="container top-pad-80">
												<div class="row">
													<div class="col l12 s12">
														<p class="title_proceso">{{$submodule_section_data->SeccionTituloSuenos}}</p>
													</div>											
													<div class="col l4 s12">
		      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso">
													</div>
													<div class="col l3 s12 text-padding">
														<h5 class="light proceso_top">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
														<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
													</div>
													<div class="col l5 s12">
		      											<img class="hide-on-med-and-down img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}">
													</div>
												</div>
											</div>
										</li>
										<li data-date="20/04/2014">
											<div class="container top-pad-80">
												<div class="row">
													<div class="col l12 s12">
														<p class="title_proceso">{{$submodule_section_data->SeccionTituloMagia}}</p>
													</div>											
													<div class="col l4 s12">
		      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="hide-on-med-and-down img_proceso">
													</div>
													<div class="col l3 s12 text-padding">
														<h5 class="light proceso_top">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
														<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
													</div>
													<div class="col l5 s12">
		      											<img class="hide-on-med-and-down img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}">
													</div>
												</div>
											</div>
										</li>
										<li data-date="20/05/2014">
											<div class="container top-pad-80">
												<div class="row">
													<div class="col l12 s12">
														<p class="title_proceso">{{$submodule_section_data->SeccionTituloPasion}}</p>
													</div>											
													<div class="col l4 s12">
		      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="hide-on-med-and-down img_proceso">
													</div>
													<div class="col l3 s12 text-padding">
														<h5 class="light proceso_top">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
														<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
													</div>
													<div class="col l5 s12">
		      											<img class="hide-on-med-and-down img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}">
													</div>
												</div>
											</div>
										</li>
										<li data-date="09/07/2014">
											<div class="container top-pad-80">
												<div class="row">
													<div class="col l12 s12">
														<p class="title_proceso">{{$submodule_section_data->SeccionTituloLuz}}</p>
													</div>
													<div class="col l4 s12">
		      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="hide-on-med-and-down img_proceso">
													</div>
													<div class="col l3 s12 text-padding">
														<h5 class="light proceso_top">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
														<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
													</div>
													<div class="col l5 s12">
		      											<img class="hide-on-med-and-down img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}">
													</div>
												</div>
											</div>
										</li>
									</ol>
								</div> 
								<!-- .events-content -->

								<!-- Start .timeline -->
								<div class="timeline" style="z-index: 9;">
									<!-- Start .events-wrapper -->
									<div class="events-wrapper gb_margin10">
										<div class="events">
											<ol>
												<li><a href="#0" data-date="16/01/2014" class="selected">{{$submodule_section_data->SeccionSubTProcesoConcepto}}</a></li>
												<li><a href="#0" data-date="28/02/2014">{{$submodule_section_data->SeccionSubTProcesoSuenos}}</a></li>
												<li><a href="#0" data-date="20/04/2014">{{$submodule_section_data->SeccionSubTProcesoMagia}}</a></li>
												<li><a href="#0" data-date="20/05/2014">{{$submodule_section_data->SeccionSubTProcesoPasion}}</a></li>
												<li><a href="#0" data-date="09/07/2014">{{$submodule_section_data->SeccionSubTProcesoLuz}}</a></li>
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
	</article>
	<!-- End Proceso -->

	<!-- Start ¿En Que Te Convierte? -->
	<article id="tab3" class="scrollspy">
		<div id="" class="bg_queteconvierte">
			<div class="hide-on-med-and-down" style="position: relative;  z-index: 0;  height: 700px;">
				<img style="position: absolute; bottom: 0; left: 0; width: 300px;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="">
				<img style="position: absolute; bottom: 0; right: 0; width: 300px;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}">			
				<div class="container" style="padding-top: 100px;" >
					<div class="row">
						<div class="col l8 offset-l2 ">
							<div class="col l6">
								<h4 style="text-align: right; margin-bottom: 0; " class="gb_gray light">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
								<div class="col l9 right">
									<div class="row" style="position: relative;" >
										<img class="hide-on-med-and-down responsive-img gb_img_line1" src="media/img/subasta/bg_line1.png" alt="">
										<p  style="text-align: right; line-height: 130%; margin-top: 0.5rem; " class="light">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col l12">
							<p class="title-convierte">{{$submodule_section_data->SeccionEncabezadoEnQueTeConvierte}}</p>					
						</div>
						<div class="col l8 offset-l2 ">
							<div class="col l6 right">
								<div class="col l9 right" style="position: relative;" >
									<img class="hide-on-med-and-down gb_img_line2" src="media/img/subasta/bg_line2.png" alt="">
									<h4 style="margin-bottom: 0; " class="gb_gray light">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
									<p  style="line-height: 130%; margin-top: 0.5rem; " class="light">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>								
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
			<div class="hide-on-large-only">
				<div  class="container" style="padding-bottom: 10%; padding-top: 10%" >
					<div class="row">
						<div class="col s6">
							<img class="hide-on-med-and-down" style="width: 100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="">
						</div>
						<div class="col s12 m12 l6">
							<h4 class="gb_gray light center-align">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
							<p style="line-height: 130%" class="light">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
						</div>					
					</div>
					<div class="row no-margin-bottom">
						<div class="col s12">
							<p class="title-convierte center-align">{{$submodule_section_data->SeccionEncabezadoEnQueTeConvierte}}</p>
						</div>					
					</div>
					<div class="row no-margin-bottom">
						<div class="col s12 m12 l6">
							<h4 class="gb_gray light center-align">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
							<p style="line-height: 130%" class="light">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>						
						</div>
						<div class="col s6">
							<img class="hide-on-med-and-down" style="width: 100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}" alt="">
						</div>
						
					</div>
				</div>
			
			</div>	
		</div>
	</article>
	<!-- End ¿En Que Te Convierte? -->

	<!-- Start Especificaciones -->
	<article id="tab4" class="scrollspy">
		<div id="" class="bg_especificaciones">
			<div class="">
				<div class="">
					<div class="">
						<div class=""> <!-- start col s12 main -->
							<section class="cd-horizontal-timeline" style="position: relative;"> <!-- start section timeline -->
								<div class="events-content"> <!-- start events-content -->
									<ol>
										<li class="selected" data-date="16/01/2014">
											<div class="container top-pad-70">
												<div class="s">
													<div class="s" style="margin-top: 4%;">
														<p class="gb_top_x3 title-espec">{{$submodule_section_data->SeccionEncabezadoEspecificaciones}}</p>
													</div>
												</div>
												<div class="row"> <!-- start second row -->
													<div class="col s12 m6 l4"> <!-- img subasta -->
														<div class="spec-marg-btm">
															<img class="espec-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones}}" alt="">
														</div>
													</div>
													<div class="col s12 m6 l3"> <!-- text materiales -->
														<div class="hide-on-med-and-down" style="position: relative; padding-top: 13%;"> <!-- start for Desktop -->
															<div style=" position: absolute; left: 20%;" class="col l11">
																<div style="position: relative;">
																	<img style="position: absolute; top: 8px; left:-58%; width: 50%;" src="media/img/subasta/left_sign.png">
																	<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
																</div>
																<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>
															</div>
														</div> <!-- end for Desktop -->
														<div class="hide-on-large-only"> <!-- start for Mobile -->
															<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
															<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>
														</div> <!-- end for Mobile -->
													</div>
													<div class="col l4 s12 hide-on-med-and-down">
														<div class="row">
															<div class="col l12 s12">
																<div style="position: relative; margin-top: -8%; margin-left: 12%;">
																	<a class="modal-trigger" href="#modal1"><img style=" width:35%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:31%; width: 6%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
																</div>
																<div style="position: relative; margin-top: 17%; margin-left: 33%;">
																	<a class="modal-trigger2" href="#modal2"><img  style=" width:45%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:39%; width: 7.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
																</div>
																<div style="position: relative;">
																	<a class="modal-trigger3" href="#modal3"><img style="width:31%; position: absolute;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:27%; width: 5.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="col m6 s12 hide-on-large-only" style="margin-top: 10px;"> <!-- start mobile version-->
														<div class="row">
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger" href="#modal1"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
																</div>
																<img style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger2" href="#modal2"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black;" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
																</div>
																<img  style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative;">
																<a class="modal-trigger3" href="#modal3"><img style="position: absolute; top: 0%; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
																</div>
																<img style="width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt=""></a>
															</div>
														</div>
													</div> <!-- end mobile version-->
												</div> <!-- end second row -->
												<div class="hide-on-med-and-down"><br><br><br><br><br></div>
											</div>
										</li>
										<li data-date="20/04/2014">
											<div class="container top-pad-70">
												<div class="s">
													<div class="s" style="margin-top: 4%;">
														<p class="gb_top_x3 title-espec">{{$submodule_section_data->SeccionEncabezadoEspecificaciones2}}</p>
													</div>
												</div>
												<div class="row"> <!-- start second row -->
													<div class="col s12 m6 l4"> <!-- img subasta -->
														<div class="spec-marg-btm">
															<img class="espec-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones10}}" alt="">
														</div>
													</div>
													<div class="col s12 m6 l3"> <!-- text materiales -->
														<div class="hide-on-med-and-down" style="position: relative; padding-top: 13%;"> <!-- start for Desktop -->
															<div style=" position: absolute; left: 20%;" class="col l11">
																<div style="position: relative;">
																	<img style="position: absolute; top: 8px; left:-58%; width: 50%;" src="media/img/subasta/left_sign.png">
																	<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones2}}</h5>
																</div>
																<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones2}}</p>
															</div>
														</div> <!-- end for Desktop -->
														<div class="hide-on-large-only"> <!-- start for Mobile -->
															<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones2}}</h5>
															<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones2}}</p>
														</div> <!-- end for Mobile -->
													</div>
													<div class="col l4 s12 hide-on-med-and-down">
														<div class="row">
															<div class="col l12 s12">
																<div style="position: relative; margin-top: -8%; margin-left: 12%;">
																	<a class="modal-trigger" href="#modal4"><img style=" width:35%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones4}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:31%; width: 6%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion4}}</h4>
																</div>
																<div style="position: relative; margin-top: 17%; margin-left: 33%;">
																	<a class="modal-trigger2" href="#modal5"><img  style=" width:45%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones5}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:39%; width: 7.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion5}}</h4>
																</div>
																<div style="position: relative;">
																	<a class="modal-trigger3" href="#modal6"><img style="width:31%; position: absolute;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones6}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:27%; width: 5.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion6}}</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="col m6 s12 hide-on-large-only" style="margin-top: 10px;"> <!-- start mobile version-->
														<div class="row">
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger" href="#modal4"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion4}}</h4>
																</div>
																<img style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones4}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger2" href="#modal5"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black;" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion5}}</h4>
																</div>
																<img  style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones5}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative;">
																<a class="modal-trigger3" href="#modal6"><img style="position: absolute; top: 0%; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion6}}</h4>
																</div>
																<img style="width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones6}}" alt=""></a>
															</div>
														</div>
													</div> <!-- end mobile version-->
												</div> <!-- end second row -->
												<div class="hide-on-med-and-down"><br><br><br><br><br></div>
											</div>
										</li>
										<li data-date="09/07/2014">
											<div class="container top-pad-70">
												<div class="s">
													<div class="s" style="margin-top: 4%;">
														<p class="gb_top_x3 title-espec">{{$submodule_section_data->SeccionEncabezadoEspecificaciones3}}</p>
													</div>
												</div>
												<div class="row"> <!-- start second row -->
													<div class="col s12 m6 l4"> <!-- img subasta -->
														<div class="spec-marg-btm">
															<img class="espec-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones11}}" alt="">
														</div>
													</div>
													<div class="col s12 m6 l3"> <!-- text materiales -->
														<div class="hide-on-med-and-down" style="position: relative; padding-top: 13%;"> <!-- start for Desktop -->
															<div style=" position: absolute; left: 20%;" class="col l11">
																<div style="position: relative;">
																	<img style="position: absolute; top: 8px; left:-58%; width: 50%;" src="media/img/subasta/left_sign.png">
																	<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones3}}</h5>
																</div>
																<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones3}}</p>
															</div>
														</div> <!-- end for Desktop -->
														<div class="hide-on-large-only"> <!-- start for Mobile -->
															<h5 class="light">{{$submodule_section_data->SeccionSubTituloEspecificaciones3}}</h5>
															<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones3}}</p>
														</div> <!-- end for Mobile -->
													</div>
													<div class="col l4 s12 hide-on-med-and-down">
														<div class="row">
															<div class="col l12 s12">
																<div style="position: relative; margin-top: -8%; margin-left: 12%;">
																	<a class="modal-trigger" href="#modal7"><img style=" width:35%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones7}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:31%; width: 6%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion7}}</h4>
																</div>
																<div style="position: relative; margin-top: 17%; margin-left: 33%;">
																	<a class="modal-trigger2" href="#modal8"><img  style=" width:45%;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones8}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:39%; width: 7.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion8}}</h4>
																</div>
																<div style="position: relative;">
																	<a class="modal-trigger3" href="#modal9"><img style="width:31%; position: absolute;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones9}}" alt=""></a>
																	<img style="position: absolute; top: 0%; left:27%; width: 5.5%;" src="media/img/subasta/plus_sign.png">
																	<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion9}}</h4>
																</div>
															</div>
														</div>
													</div>
													<div class="col m6 s12 hide-on-large-only" style="margin-top: 10px;"> <!-- start mobile version-->
														<div class="row">
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger" href="#modal7"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion7}}</h4>
																</div>
																<img style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones7}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative; z-index: 0;">
																<a class="modal-trigger2" href="#modal8"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black;" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion8}}</h4>
																</div>
																<img  style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones8}}" alt=""></a>
															</div>
															<div class="col s4" style="position: relative;">
																<a class="modal-trigger3" href="#modal9"><img style="position: absolute; top: 0%; left:80%; width: 11%;" src="media/img/subasta/plus_sign.png">
																<div class="center-abs-div">
																	<h4 style="color: black" class="">{{$submodule_section_data->PorcentajeMaterialEspecificacion9}}</h4>
																</div>
																<img style="width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones9}}" alt=""></a>
															</div>
														</div>
													</div> <!-- end mobile version-->
												</div> <!-- end second row -->
												<div class="hide-on-med-and-down"><br><br><br><br><br></div>
											</div>
										</li>
									</ol>
								</div> <!-- end events-content -->
								<div class="hide-on-med-and-down"><br><br><br><br><br></div>

								<div class="timeline" style="z-index: 9;"> <!-- Start timeline especificaciones -->
									<div class="events-wrapper gb_margin10"> <!-- Start events-wrapper -->
										<div class="events"> <!-- start events -->
											<ol>
												<li><a href="#0" data-date="16/01/2014" class="selected" style="font-size: 0.9em !important;">{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</a></li>
												<li><a href="#0" data-date="28/02/2014" style="font-size: 0.9em !important; display: none !important;">aaaaaa</a></li>
												<li><a href="#0" data-date="20/04/2014" style="font-size: 0.9em !important;">{{$submodule_section_data->SeccionSubTituloEspecificaciones2}}</a></li>
												<li><a href="#0" data-date="20/05/2014" style="font-size: 0.9em !important; display: none !important;">aaaaaa</a></li>
												<li><a href="#0" data-date="09/07/2014" style="font-size: 0.9em !important;">{{$submodule_section_data->SeccionSubTituloEspecificaciones3}}</a></li>
											</ol>
											<span class="filling-line" aria-hidden="true"></span>
										</div> <!-- end events <-->
									</div> <!-- End events-wrapper -->
								</div> <!-- End timeline especificaciones -->
							</section> <!-- end section timeline -->
						</div> <!-- end col s12 main -->
					</div>
				</div>
			</div>
		</div>

		<!-- Start Modal Especificaciones -->
		<div id="modal1" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion1}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion1}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion1}}" alt="">
		</div>
		<div id="modal2" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion2}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion2}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion2}}" alt="">
		</div>
		<div id="modal3" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion3}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion3}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion3}}" alt="">
		</div>
		<div id="modal4" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion4}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion4}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion4}}" alt="">
		</div>
		<div id="modal5" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion5}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion5}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion5}}" alt="">
		</div>
		<div id="modal6" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion6}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion6}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion6}}" alt="">
		</div>
		<div id="modal7" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion7}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion7}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion7}}" alt="">
		</div>
		<div id="modal8" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion8}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion8}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion8}}" alt="">
		</div>
		<div id="modal9" class="modal_md">
			<div class="modal_dialog">
				<div class="modal_content">
					<h4 style="margin-bottom: -2%; margin-top: 1%;">{{$submodule_section_data->SecccionTiuloEspecificacion9}}</h4 >
					<p class="light" style="line-height: 1.5rem; font-size: 1.2rem;">{{$submodule_section_data->SecccionDescEspecificacion9}}</p>
					<!-- modal close button -->
					<a class="modal_close btn_modal_close modal-close">x</a>
				</div>
			</div>
			<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion9}}" alt="">
		</div>
		<!-- End Modal Especificaciones -->
	</article>
	<!-- End Especificaciones -->
	<article id="tab5" class="scrollspy"></article>
	<article id="tab6" class="scrollspy"></article>
	<article id="tab7" class="scrollspy"></article>
@stop
@section('addJs')
<script src="vendor/plugins/simple-gal.js"></script>
<script src="js/jquery.smooth.js"></script>
<script>
$(document).ready(function(){
	serverdate = new Date(<?php echo time(); ?>*1000);

	// scrollspy
	$('body').scrollSpy({target: ".tab", offset: 50});

	$("#tabsNavbar a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function(){
				window.location.hash = hash;
			});
		}
	});

	$(".tab5").click(function(event) {
		window.location.href=HOST+"/subasta/comentarios#tab5";
	});

	$(".tab6").click(function(event) {
		window.location.href=HOST+"/subasta/subastas#tab6";
	});

	$(".tab7").click(function(event) {
		window.location.href=HOST+"/subasta/proximamente#tab7";
	});

});
</script>
<script>
(function($){
	$(window).on("load",function(){

		$("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
			highlightSelector:"#navigation-menu a",
			pageEndSmoothScroll: true,
			forceSingleHighlight:true
		});

	});
})(jQuery);
</script>
<script src="js/jquery_date.js"></script>
<script src="js/script.js"></script>
<script src="js/auction_bids.js"></script>
<script src="js/jquery_validate.js"></script>
<script src="js/subasta.js"></script>
@stop