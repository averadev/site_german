@extends('templates.main')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/app/subasta.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/app/proximamente.css') }}">	
	<!-- start submenu fixed -->
	<div class="contenedor_submenu">
		<div class="container">			
			<div class="row gb_mrg_1 no-margin-bottom">
				<div class="col s12">
					<span class="nav-title gb_title_x2">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
					<nav id="navigation-menu">
						<ul class="tabs-menu">
							<li class="tab"><a href="#tab1">THE REASON</a></li>
							<li class="tab"><a href="#tab2">THE PROCESS</a></li>
							<li class="tab"><a href="#tab3">WHAT IT DOES TO YOU</a></li>
							<li class="tab"><a href="#tab4">SPECIFICATIONS</a></li>
							<li class="tab"><a href="#tab5">SCULPTURE</a></li>
							<li class="tab"><a href="#tab6">COMMENTS</a></li>
							<li class="tab"><a href="#tab7">COMING SOON</a></li>
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

	<!-- Start ¿Porque? -->
	
		<div class="hide-on-large-only">
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	<article id="tab1" class="scrollspy">
		<div style="background-image: url('../media/img/subasta/{{$submodule_section_data->background_porque}}');" class="bg_porque ">
			<div class="hide-on-med-and-down" style="position: relative; z-index: 0;  height: 700px;"> <!-- Desktop -->
				<img alt="{{$submodule_section_data->Img_porque_german_alt}}" src="../media/img/subasta/{{$submodule_section_data->Img_porque_german}}" style="position: absolute; width: 800px; bottom: 0; z-index: -1; ">
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
					<img alt="{{$submodule_section_data->Img_porque_german_alt}}" src="../media/img/subasta/{{$submodule_section_data->Img_porque_german}}" style="width: 95%; display: block; margin: 0 auto; " >
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
		<div style="background-image: url('../media/img/subasta/{{$submodule_section_data->background_proceso}}');" class="bg_proceso">
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
				     						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso" >
									</div>
									<div class="col l3 s12 text-padding" >
										<h5 class="light proceso_top">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
										<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
									</div>
									<div class="col l5 s12">
										<img alt="{{$submodule_section_data->SeccionIMGConcepto2_alt}}" class="hide-on-med-and-down img2_proceso" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}">
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
		    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso">
									</div>
									<div class="col l3 s12 text-padding">
										<h5 class="light proceso_top">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
										<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
									</div>
									<div class="col l5 s12">
		    	  						<img alt="{{$submodule_section_data->SeccionIMGSuenos_alt}}" class="hide-on-med-and-down img2_proceso" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}">
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
		    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso">
									</div>
									<div class="col l3 s12 text-padding">
										<h5 class="light proceso_top">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
										<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
									</div>
									<div class="col l5 s12">
		    	  						<img alt="{{$submodule_section_data->SeccionIMGMagia_alt}}" class="hide-on-med-and-down img2_proceso" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}">
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
		    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}"  class="hide-on-med-and-down img_proceso">
									</div>
									<div class="col l3 s12 text-padding">
										<h5 class="light proceso_top">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
										<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
									</div>
									<div class="col l5 s12">
		    	  						<img alt="{{$submodule_section_data->SeccionIMGPasion_alt}}"  class="hide-on-med-and-down img2_proceso" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}">
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
		    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}"  class="hide-on-med-and-down img_proceso">
									</div>
									<div class="col l3 s12 text-padding">
										<h5 class="light proceso_top">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
										<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
									</div>
									<div class="col l5 s12">
		    	  						<img alt="{{$submodule_section_data->SeccionIMGLuz_alt}}" class="hide-on-med-and-down img2_proceso" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}">
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
				<div class="events-wrapper">
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
	</article>
	<!-- End Proceso -->

	<!-- Start ¿En Que Te Convierte? -->
	<article id="tab3" class="scrollspy">
		<div  style="background-image: url('../media/img/subasta/{{$submodule_section_data->backgroundEnQueTeConvierte}}');" class="bg_queteconvierte">
			<div class="hide-on-med-and-down" style="position: relative;  z-index: 0;  height: 700px;">
				<img style="position: absolute; bottom: 0; left: 0; width: 300px;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="{{$submodule_section_data->SeccionIMGEnQueTeConvierte1_alt}}"  >
				<img style="position: absolute; bottom: 0; right: 0; width: 300px;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}"  alt="{{$submodule_section_data->SeccionIMGEnQueTeConvierte2_alt}}" >			
				<div class="container" style="padding-top: 100px;" >
					<div class="row">
						<div class="col l8 offset-l2 ">
							<div class="col l6">
								<h4 style="text-align: right; margin-bottom: 0; " class="gb_gray light">{{$submodule_section_data->SeccionTituloEnQueTeConvierte}}</h4>
								<div class="col l9 right">
									<div class="row" style="position: relative;" >
										<img class="hide-on-med-and-down responsive-img gb_img_line1" src="../media/img/subasta/bg_line1.png" >
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
									<img class="hide-on-med-and-down gb_img_line2" src="../media/img/subasta/bg_line2.png" >
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
							<img class="hide-on-med-and-down" style="width: 100%;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte1}}" alt="{{$submodule_section_data->SeccionIMGEnQueTeConvierte1_alt}}" >
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
							<img class="hide-on-med-and-down" style="width: 100%;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEnQueTeConvierte2}}" alt="{{$submodule_section_data->SeccionIMGEnQueTeConvierte2_alt}}" >
						</div>
						
					</div>
				</div>
			
			</div>	
		</div>
	</article>
	<!-- End ¿En Que Te Convierte? -->

	<!-- Start Especificaciones -->
	<article id="tab4" class="scrollspy">
		<div style="background-image: url('../media/img/subasta/{{$submodule_section_data->background_especificaciones}}'); padding-bottom: 4%;" class="bg_especificaciones">	
				<div class="container top-pad-70">
					<div class="s">
						<div class="s">
							<p class="gb_top_x3 title-espec">{{$submodule_section_data->SeccionEncabezadoEspecificaciones}}</p>
						</div>
					</div>
					<div class="row no-margin-bottom"> <!-- start second row -->
						<div class="col s12 m6 l4"> <!-- img subasta -->
							<div class="spec-marg-btm">
								<img class="espec-img" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones_alt}}" >
							</div>
						</div>
						<div class="col s12 m6 l3"> <!-- text materiales -->
							<div class="hide-on-med-and-down" style="position: relative; padding-top: 13%;"> <!-- start for Desktop -->
								<div style=" position: absolute; left: 20%;" class="col l11">
									<div style="position: relative;">
										<img style="position: absolute; top: 8px; left:-58%; width: 50%;" src="../media/img/subasta/left_sign.png">
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
						<div class="col l5 s12 hide-on-med-and-down">
							<div class="row">
								<div class="col l12 s12">
									<div class="row no-margin-bottom ">
										<div style="position: relative; margin-top: -8%; margin-left: 12%;">
											<a class="modal-trigger" href="#modal1"><img style=" width:27%;" class="circle responsive-img" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones1_alt}}"></a>
											<img style="position: absolute; top: 0%; left:24%; width: 4.5%;" src="../media/img/subasta/plus_sign.png" alt="signo_mas" >
											<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
										</div>
										<div style="position: relative; margin-top: 8%; margin-left: 20%;">
											<a class="modal-trigger2" href="#modal2"><img  style=" width:29%;" class="circle responsive-img" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones2_alt}}"></a>
											<img style="position: absolute; top: 0%; left:26%; width: 5%;" src="../media/img/subasta/plus_sign.png" alt="signo_mas" >
											<h4 style="margin-top: 10%; margin-bottom: 0%; font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
										</div>
										<div style="position: relative; margin-top: 4%">
											<a class="modal-trigger3" href="#modal3"><img style="width:24%; position: absolute;" class="circle responsive-img" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones3_alt}}"></a>
											<img style="position: absolute; top: 0%; left:21%; width: 3.8%;" src="../media/img/subasta/plus_sign.png" alt="signo_mas" >
											<h4 style="margin-top: 10%; margin-bottom: 0%;  font-size: 42px; float: right;" class="hide-on-med-and-down thin porcentaje">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col m6 s12 hide-on-large-only" style="margin-top: 10px;"> <!-- start mobile version-->
							<div class="row">
								<div class="col s4" style="position: relative; z-index: 0;">
									<a class="modal-trigger" href="#modal1"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="../media/img/subasta/plus_sign.png" alt="signo_mag" >
									<img style=" width:100%;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones1}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones1_alt}}" ></a>
									<h4 style="color: black" class="esp-escultura">{{$submodule_section_data->PorcentajeMaterialEspecificacion1}}</h4>
								</div>
								<div class="col s4" style="position: relative; z-index: 0;">
									<a class="modal-trigger2" href="#modal2"><img style="position: absolute; top: 0; left:80%; width: 11%;" src="../media/img/subasta/plus_sign.png" alt="signo_mag" >									
									<img  style=" width:100%;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones2}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones2_alt}}" ></a>
									<h4 style="color: black;" class="esp-escultura">{{$submodule_section_data->PorcentajeMaterialEspecificacion2}}</h4>
								</div>
								<div class="col s4" style="position: relative;">
									<a class="modal-trigger3" href="#modal3"><img style="position: absolute; top: 0%; left:80%; width: 11%;" src="../media/img/subasta/plus_sign.png" alt="signo_mag" >
									<img style="width:100%;" src="../media/img/subasta/{{$submodule_section_data->SeccionIMGEspecificaciones3}}" alt="{{$submodule_section_data->SeccionIMGEspecificaciones3_alt}}" ></a>
									<h4 style="color: black" class="esp-escultura">{{$submodule_section_data->PorcentajeMaterialEspecificacion3}}</h4>
								</div>
							</div>
						</div> <!-- end mobile version-->
					</div> <!-- end second row -->
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
			<img class="modal_img" src="../media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion1}}" alt="{{$submodule_section_data->SecccionIMGEspecificacion1_alt}}" >
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
			<img class="modal_img" src="../media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion2}}" alt="{{$submodule_section_data->SecccionIMGEspecificacion2_alt}}" >
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
			<img class="modal_img" src="../media/img/subasta/{{$submodule_section_data->SecccionIMGEspecificacion3}}" alt="{{$submodule_section_data->SecccionIMGEspecificacion3_alt}}" >
		</div>
		<!-- End Modal Especificaciones -->
	</article>

	<article>
		@include('subasta.proximamentetmp')
	</article>
	<article>
		@include('subasta.comentarios')
	</article>
	<article>
		@include('subasta.proximamente')
	</article>

@stop
@section('addJs')
	<script>
		$(document).ready(function(){
			serverdate = new Date(<?php echo time(); ?>*1000);
		});
	</script>
	<script src="vendor/plugins/simple-gal.js"></script>
	<script src="vendor/plugins/timeline.js"></script>
	<script src="js/subasta_secciones.js"></script>
	<script src="{{ URL::asset('vendor/plugins/jquery_date.js') }}"></script>
	<script src="{{ URL::asset('js/proximamentetmp.js') }}"></script>	
	<script src="{{ URL::asset('js/subasta_comentarios.js') }}"></script>
	<script src="{{ URL::asset('js/proximamente.js') }}"></script>
@stop