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
	
	<!-- Start Comments -->
	<div id="tab5" class="scrollspy"></div>
	<div class="hide-on-large-only">
		<br>
		<br>
		<br>
	</div>
	<div id="" class="bg_comentario">
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
				<?php
						$sectionComments = $comments;
						$row = null;
						$numberRows = [2,2,3];

						$styles1 = [
							['col s12 m12 l8 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2'],
							['col s12 m12 l8 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1'],
							['col s12 m12 l6 no_padd1 comment-type1','col s12 m12 l6 no_padd1 comment-type2'],
							['col s12 m12 l6 no_padd1 comment-type2','col s12 m12 l6 no_padd1 comment-type1']
						];
			
						$styles2 = [
							['col s12 m12 l4 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1'],
							['col s12 m12 l4 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2']
						];
							shuffle($styles1);
							shuffle($styles2);
							$rows2 = $styles1;
							$rows3 = $styles2;

							while( count($sectionComments) >1 ){
                            shuffle($numberRows);
                            if(count($rows2) < 1){
                                shuffle($styles1);
                                $rows2 = $styles1;
                            }
                            if(count($rows3) < 1){
                                shuffle($styles2);
                                $rows3 = $styles2;
                            }
							$render2rows = (array_pop($rows2));
							$render3rows = (array_pop($rows3));
							$row = array_splice( $sectionComments,0,current($numberRows) );
							if(count($row) == 2){ /*Cuando es un row de 2 columnas*/
								foreach ($row as $key => $value) {
								/*Render two rows div*/
									?> 
										<div class="{{$render2rows[$key]}} ">
											<div class="card no_margin1">
												<div class="gb_container_header" style="background-color: #2e332d; z-index: 9;">
													<h4>{{$value->NombreEscultura}}</h4>
												</div>
												<div class="card-content">
													<div style="margin-top: 40px; margin-bottom: 50px;">
														<div class="gb_text_rs">
															<p>{{$value->Comentario}}...</p>
															<div style="display: flex; align-items: center;">
																<div class="gb_date2"><img src="../media/img/subasta/bg_avatar.jpg"></div>
																<div style="padding: 7px;">
																	<span style="font-weight: 500;">{{$value->NombreNick}}.- </span><span class="gb_italic">{{$value->Dia}} de {{$value->NombreMes}} de {{$value->Anio}}</span>
																</div>
															</div>
														</div>
													</div>
													<div class="social_img"><img src="../media/img/subasta/comments.png" alt=""></div>
												</div>
											</div>
										</div>
									<?php	
								}
							}else{ /*cuando es un row 3 columnas*/
								foreach ($row as $key => $value) {
								/*Render three rows div*/
									?> 
										<div class="{{$render3rows[$key]}} ">
											<div class="card no_margin1">
												<div class="gb_container_header" style="background-color: #2e332d; z-index: 9;">
													<h4>{{$value->NombreEscultura}}</h4>
												</div>
												<div class="card-content">
													<div style="margin-top: 40px; margin-bottom: 50px;">
														<div class="gb_text_rs">
															<p>{{$value->Comentario}}...</p>
															<div style="display: flex; align-items: center;">
																<div class="gb_date2"><img src="../media/img/subasta/bg_avatar.jpg"></div>
																<div style="padding: 7px;">
																	<span style="font-weight: 500;">{{$value->NombreNick}}.- </span><span class="gb_italic">{{$value->Dia}} de {{$value->NombreMes}} de {{$value->Anio}}</span>
																</div>
															</div>
														</div>
													</div>
													<div class="social_img"><img src="../media/img/subasta/comments.png" alt=""></div>
												</div>
											</div>
										</div>	
									<?php	
								}
							} //end else
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Comments -->

@stop
@section('addJs')
<script src="{{ URL::asset('vendor/plugins/simple-gal.js') }}"></script>
<script src="{{ URL::asset('js/jquery.smooth.js') }}"></script>
<script>
$(document).ready(function(){
	serverdate = new Date(<?php echo time(); ?>*1000);

	// scrollspy
	$('body').scrollSpy({target: ".tab", offset: 130});

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

	$(".tab1").click(function(event) {
		window.location.href=HOST+"/subasta#tab1";
	});

	$(".tab2").click(function(event) {
		window.location.href=HOST+"/subasta#tab2";
	});

	$(".tab3").click(function(event) {
		window.location.href=HOST+"/subasta#tab3";
	});

	$(".tab4").click(function(event) {
		window.location.href=HOST+"/subasta#tab4";
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
@stop