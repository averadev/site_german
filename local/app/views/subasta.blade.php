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
		<div class="hide-on-med-and-down" style="position: relative;  z-index: 0;  height: 700px;"> <!-- Desktop -->
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

	<!-- End ¿Porque? -->

	<!-- Start Proceso -->
	<div id="tab5" class="bgg_proceso">
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
													<p class="title_proceso" >{{$submodule_section_data->SeccionTituloProceso}}</p>
												</div>
												<div class="col l4 s12 ">
		      										<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="img_proceso" >
												</div>
												<div class="col l3 s12 text-padding" >
													<h5 class="light proceso_top">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
													<p class="proceso-text">{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
												</div>
												<div class="col l5 s12">
													<img class="img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}">
												</div>
											</div>
										</div>
									</li>
									<li data-date="28/02/2014">
										<div class="container top-pad-80">
											<div class="row">
												<div class="col l12 s12">
													<p class="title_proceso">{{$submodule_section_data->SeccionTituloProcesoSuenos}}</p>
												</div>											
												<div class="col l4 s12">
	      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="img_proceso">
												</div>
												<div class="col l3 s12 text-padding">
													<h5 class="light proceso_top">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
													<p class="proceso-text">{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
												</div>
												<div class="col l5 s12">
	      											<img class="img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}">
												</div>
											</div>
										</div>
									</li>
									<li data-date="20/04/2014">
										<div class="container top-pad-80">
											<div class="row">
												<div class="col l12 s12">
													<p class="title_proceso">{{$submodule_section_data->SeccionTituloProcesoMagia}}</p>
												</div>											
												<div class="col l4 s12">
	      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="img_proceso">
												</div>
												<div class="col l3 s12 text-padding">
													<h5 class="light proceso_top">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
													<p class="proceso-text">{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
												</div>
												<div class="col l5 s12">
	      											<img class="img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}">
												</div>
											</div>
										</div>
									</li>
									<li data-date="20/05/2014">
										<div class="container top-pad-80">
											<div class="row">
												<div class="col l12 s12">
													<p class="title_proceso">{{$submodule_section_data->SeccionTituloProcesoPasion}}</p>
												</div>											
												<div class="col l4 s12">
	      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="img_proceso">
												</div>
												<div class="col l3 s12 text-padding">
													<h5 class="light proceso_top">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
													<p class="proceso-text">{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
												</div>
												<div class="col l5 s12">
	      											<img class="img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}">
												</div>
											</div>
										</div>
									</li>
									<li data-date="09/07/2014">
										<div class="container top-pad-80">
											<div class="row">
												<div class="col l12 s12">
													<p class="title_proceso">{{$submodule_section_data->SeccionTituloProcesoLuz}}</p>
												</div>
												<div class="col l4 s12">
	      											<img src="media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" alt="" class="img_proceso">
												</div>
												<div class="col l3 s12 text-padding">
													<h5 class="light proceso_top">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
													<p class="proceso-text">{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
												</div>
												<div class="col l5 s12">
	      											<img class="img2_proceso" src="media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}">
												</div>
											</div>
										</div>
									</li>
								</ol>
							</div> 
							<!-- .events-content -->

							<!-- Start .timeline -->
							<div class="timeline" style="z-index: 1000;" >
								<!-- Start .events-wrapper -->
								<div class="events-wrapper" >
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
	<!-- End Proceso -->

	<!-- Start ¿En Que Te Convierte? -->
	<div id="tab6" class="bg_queteconvierte" >
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
						<img style="width: 100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="">
					</div>
					<div class="col s6">
						<h4 class="gb_gray light">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
						<p style="line-height: 130%" class="light">{{$submodule_section_data->SeccionDescEnQueTeConvierte}}</p>
					</div>					
				</div>
				<div class="row no-margin-bottom">
					<div class="col s12">
						<p class="title-convierte">{{$submodule_section_data->SeccionEncabezadoEnQueTeConvierte}}</p>
					</div>					
				</div>
				<div class="row no-margin-bottom">
					<div class="col s6" >
						<h4 class="gb_gray light">{{$submodule_section_data->SeccionTitulo2EnQueTeConvierte}}</h4>
						<p style="line-height: 130%" class="light">{{$submodule_section_data->SeccionDesc2EnQueTeConvierte}}</p>						
					</div>
					<div class="col s6">
						<img style="width: 100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}" alt="">
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
							<div class="col s12" style="margin-top: 4%;">
								<p class="gb_top_x3 title-espec">{{$submodule_section_data->SeccionEncabezadoEspecificaciones}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m6 l4"> <!-- img subasta -->
							<div class="spec-marg-btm">
								<img class="espec-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones}}" alt="">								
							</div>
							</div>
							<div class="col s12 m6 l3"> <!-- text materiales -->
								<div class="hide-on-med-and-down" style="position: relative; padding-top: 13% " > <!-- for Desktop -->								
									<div style=" position: absolute; left: 20%; " class="col l11">
										<div style="position: relative;">
											<img style="position: absolute; top: 8px; left:-58%; width: 50%; " src="media/img/subasta/left_sign.png">
											<h5 class="light" >{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
										</div>										
										<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>		
									</div>
								</div>
								<div class="hide-on-large-only"> <!-- for Mobile -->
									<h5 class="light" >{{$submodule_section_data->SeccionSubTituloEspecificaciones}}</h5>
									<p style="margin-top: 0px;" class="left-align light med-lineheight">{{$submodule_section_data->SeccionDescEspecificaciones}}</p>
								</div>
							</div>
							<div class="col l4 s12 hide-on-med-and-down ">
								<div class="row">
									<div class="col l12 s12">
										<div style="position: relative; margin-top: -8%; margin-left: 12%;">
											<a class="modal-trigger" href="#modal1"><img style=" width:35%;  " class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt=""></a>
											<img style="position: absolute; top: 0%; left:31%; width: 6%; " src="media/img/subasta/plus_sign.png">
											<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right; " class="hide-on-med-and-down thin ">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
											
										</div>
										<div style="position: relative; margin-top: 17%; margin-left: 33%;">
											<a class="modal-trigger2" href="#modal2"><img  style=" width:45%;  " class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt=""></a>
											<img style="position: absolute; top: 0%; left:39%; width: 7.5%; " src="media/img/subasta/plus_sign.png">
											<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right; " class="hide-on-med-and-down thin ">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
										</div>
										<div style="position: relative;">
											<a class="modal-trigger3" href="#modal3"><img style="width:31%; position: absolute;" class="circle responsive-img" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt=""></a>
											<img style="position: absolute; top: 0%; left:27%; width: 5.5%; " src="media/img/subasta/plus_sign.png">										
											<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right; " class="hide-on-med-and-down thin ">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col m6 s12 hide-on-large-only" style="margin-top: 10px;" > <!--mobile version-->
								<div class="row">
									<div class="col s4" style=" position: relative; z-index: 0; " >
										<a class="modal-trigger" href="#modal1"><img style="position: absolute; top: 0; left:80%; width: 11%;  " src="media/img/subasta/plus_sign.png">
										<div class="center-abs-div">
											<h4 style="color: black" class=" ">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
										</div>
										<img style=" width:100%;"  src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt=""></a>
									</div>
									<div class="col s4" style="position: relative; z-index: 0; " >
										<a class="modal-trigger2" href="#modal2"><img style="position: absolute; top: 0; left:80%; width: 11%; " src="media/img/subasta/plus_sign.png">
										<div class="center-abs-div">
											<h4 style="color: black;" class=" ">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
										</div>
										<img  style=" width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt=""></a>
									</div>
									<div class="col s4" style="position: relative;" >
										<a class="modal-trigger3" href="#modal3"><img style="position: absolute; top: 0%; left:80%; width: 11%; " src="media/img/subasta/plus_sign.png">
										<div class="center-abs-div">
											<h4 style="color: black" class=" ">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
										</div>
										<img style="width:100%;" src="media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt=""></a>
									</div>
								</div>
							</div>
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
				<h4 style="margin-bottom: -2%; margin-top: 1%;" >{{$submodule_section_data->SecccionTiuloEspecificacion1}}</h4 >
				<p class="light" style="line-height: 1.5rem; font-size: 1.2rem; " >{{$submodule_section_data->SecccionDescEspecificacion1}}</p>
				<!-- modal close button -->
				<a class="modal_close btn_modal_close modal-close">x</a>
			</div>
		</div>
		<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion1}}" alt="">
	</div>

	<div id="modal2" class="modal_md">
		<div class="modal_dialog">
			<div class="modal_content">
				<h4 style="margin-bottom: -2%; margin-top: 1%;" >{{$submodule_section_data->SecccionTiuloEspecificacion2}}</h4 >
				<p class="light" style="line-height: 1.5rem; font-size: 1.2rem; " >{{$submodule_section_data->SecccionDescEspecificacion2}}</p>
				<!-- modal close button -->
				<a class="modal_close btn_modal_close modal-close">x</a>
			</div>
		</div>
		<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion2}}" alt="">
	</div>

	<div id="modal3" class="modal_md">
		<div class="modal_dialog">
			<div class="modal_content">
				<h4 style="margin-bottom: -2%; margin-top: 1%;" >{{$submodule_section_data->SecccionTiuloEspecificacion3}}</h4 >
				<p class="light" style="line-height: 1.5rem; font-size: 1.2rem; " >{{$submodule_section_data->SecccionDescEspecificacion3}}</p>
				<!-- modal close button -->
				<a class="modal_close btn_modal_close modal-close">x</a>
			</div>
		</div>
		<img class="modal_img" src="media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion3}}" alt="">
	</div>
				<!-- End Modal -->

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
	<div id="tab8" class="bg_comentario">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<span style="margin-top: 2em; font-size: 3.5em; font-weight: bold; font-style: italic; color: #2d332c; line-height: 0rem;" class="fontCrimson header col s12 light">Comentarios</span>
				</div>
				<br><br>
			</div>
		</div>
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row no_padd1 no-margin-bottom">
					<div class="col s12 m12 l8 no_padd1">
						<div class="card no_margin1 gb_gray3">
							<div class="gb_container_header">
								<h4>POSEIDÓN</h4>
							</div>
							<div class="card-content">
								<div class="gb_facebook" style="margin-top: 40px; margin-bottom: 50px;">
									<div class="gb_text_rs">
										<p>Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
										<div style="display: flex; align-items: center;">
											<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
											<div style="padding: 7px;">
												<span><strong>Martha Rodríguez.. -</strong></span><span class="gb_italic"><strong>30 de junio de 2016</strong></span>
											</div>
										</div>
									</div>
								</div>
								<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l4 no_padd1">
						<div class="card no_margin1 gb_gray4">
							<div class="gb_container_header">
								<h4>POSEIDÓN</h4>
							</div>
							<div class="card-content">
								<div class="gb_twitter" style="margin-top: 40px; margin-bottom: 50px;">
									<div class="gb_text_tw">
										<p class="gb_text_white">Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un</p>...
										<div style="display: flex; align-items: center;">
											<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
											<div style="padding: 7px;">
												<span class="gb_text_white"><strong>Mario Canales. -</strong></span><span class="gb_text_white gb_italic"><strong>10 de agosto de 2016</strong></span>
											</div>
										</div>
									</div>
								</div>
								<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l7 no_padd1">
						<div class="col s12 m12 l6 no_padd1">
							<div class="card no_margin1 gb_gray3">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_facebook" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_rs">
											<p>Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span><strong>Daniel Beltrán. -</strong></span><span class="gb_italic"><strong>12 de octubre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
						<div class="col s12 m12 l6 no_padd1">
							<div class="card no_margin1 gb_gray4">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_twitter" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_tw">
											<p class="gb_text_white">Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span class="gb_text_white"><strong>Lorena Mejía. -</strong></span><span class="gb_text_white gb_italic"><strong>29 de septiembre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l5 no_padd1">
						<div class="col s12 m12 no_padd1">
							<div class="card no_margin1 gb_gray3">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_facebook" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_rs">
											<p>Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span><strong>Fer Sánchez. -</strong></span><span class="gb_italic"><strong>13 de octubre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l6 no_padd1">
						<div class="col s12 m12 no_padd1">
							<div class="card no_margin1 gb_gray4">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_twitter" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_tw">
											<p class="gb_text_white">Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span class="gb_text_white"><strong>Alejandra Estrada. -</strong></span><span class="gb_text_white gb_italic"><strong>14 de septiembre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l6 no_padd1">
						<div class="col s12 m12 no_padd1">
							<div class="card no_margin1 gb_gray3">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_facebook" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_rs">
											<p>Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span><strong>Monica Bonilla. -</strong></span><span class="gb_italic"><strong>17 de octubre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l8 no_padd1">
						<div class="col s12 m12 no_padd1">
							<div class="card no_margin1 gb_gray3">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_facebook" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_rs">
											<p class="">Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span class=""><strong>Martha Rodríguez. -</strong></span><span class=" gb_italic"><strong>30 de junio de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l4 no_padd1">
						<div class="col s12 m12 no_padd1">
							<div class="card no_margin1 gb_gray4">
								<div class="gb_container_header">
									<h4>POSEIDÓN</h4>
								</div>
								<div class="card-content">
									<div class="gb_twitter" style="margin-top: 40px; margin-bottom: 50px;">
										<div class="gb_text_tw">
											<p class="gb_text_white">Ahora no sabría dibujar, ni siquiera hacer una línea con el lápiz; y sin embargo, jamás he sido mejor pintor cuando el valle se vela en torno mío con un </p>...
											<div style="display: flex; align-items: center;">
												<div class="gb_date2"><img src="media/img/subasta/bg_avatar.jpg"></div>
												<div style="padding: 7px;">
													<span class="gb_text_white"><strong>Rodrigo Olvera. -</strong></span><span class="gb_text_white gb_italic"><strong>12 de octubre de 2016</strong></span>
												</div>
											</div>
										</div>
									</div>
									<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Comments -->

	<!-- Start Coming Soon -->
	<div id="tab10" class="bg_comingsoon">
		
			<div class="container" style="padding-bottom: 8%" >
				<div class="row no-margin-bottom">
					<div class="col s12 l5 margin-left-4" >
						<div class="row">
							<div class="col s12 m12 l12 center" style="position: relative;" >								
									<div style="position: absolute; top: 27%; height: 100px; left: 50%;">
										<div style="position: relative; left: -50%;">
											@foreach ($date_coming as $key=> $value)
											<div class="col s6 " style="height: 100px;" >
												<p class="fontCrimson" style="text-align: right; line-height: 80%; font-size: 500%; font-weight: bold; margin-top: 0%; margin-bottom: 0%  " >{{$value->Dia}}</p>
											</div>
											<div class="col s6" style="height: 100px; margin-left: -8%; " >
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0%; text-transform: uppercase; "   >{{$value->NombreMes}}</p>
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0% "   >{{$value->Anio}}</p>
											</div>
											@endforeach
										</div>
									</div>
								<img style="width: 100%" src="media/img/subasta/bg_calendar_comingsoon.png" alt="">
							</div>
						</div>
					</div>
					<div class="col s12 l6">
						<div class="row">
							<div class="col s12">
								<div class="row">
									<p class="gb_gray date_current"></p>
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
										<form style="padding-bottom: 12px;" id="FormCS" class="col s12 gb_arrow_box whiteform contract" action="http://localhost:8080/site_german.git/subasta" method="post">
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
														<button id="sendBtn" class="btn btn-small col s12 green waves-effect margin-top-13" type="submit">CONTÁCTENME</button>
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