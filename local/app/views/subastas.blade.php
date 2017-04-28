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
	<br>
	<br>

	<!-- INFO SUBASTA -->
	<article id="tab6" class="scrollspy">
		<div class="hide-on-large-only">
			<br>
			<br>
			<br>
		</div>
		<div style="background-image:url('../media/img/subasta/bg_comingsoon.jpg'); background-size: cover;" id="">
			<div  class="container">
				<div class="row no-margin-bottom" style="padding-top: 4%;">
					<div class="col l6 s12"> <!-- LEFT SIDE -->
						<div style="padding: 10px 0 0 20px; border: 1px solid black; border-radius: 5px;">
							<span class="gb_title_auction">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
								<div class="row">
								<ul class="thumbnails col l2 s12">
									@foreach ($auctionpics as $key => $value)
										@if($value->name)
											@if($key == 0)
												<li>
													<a href="../media/img/subasta_esculturas/{{$value->name}}">
														<img src="../media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction active" alt="Thumbnail">
													</a>
												</li>
											@else
												<li>
													<a href="../media/img/subasta_esculturas/{{$value->name}}">
														<img src="../media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction" alt="Thumbnail">
													</a>
												</li>
											@endif
										@endif
									@endforeach
								</ul>
								<div class="col l10 s12">
									@if($auctionpics)
										@if($auctionpics[0]->name)
											<div class="main-image">
												<img src="../media/img/subasta_esculturas/{{$auctionpics[0]->name}}" alt="Placeholder" class="auction-image">
											</div>
										@endif
									@endif
								</div>
							</div>

							<div style="margin-top: 52px; margin-bottom: 20px;" >
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta1}}</p>
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta2}}</p>
							</div>
						</div>
						<div class="row">
							<div style="padding: 10px; margin-top: 2em;"  >
								<form id="bidForm" class="white top_arrow_box whiteform contract">
									<p style="margin: 3px 0 5px 10px;  " class="size30">Quiero participar en la subasta:</p>
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
												<button id="submitBid" style="font-weight: bold;" class="btn col l12 s6 left btn-small green waves-effect gb_noboxshadow">OFERTAR</button>
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
								<p id="showMoreButton" class="showMore">Ver más ofertas <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i> </p>
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
	</article>
@stop
@section('addJs')
<script src="{{ URL::asset('vendor/plugins/simple-gal.js') }}"></script>
<script src="{{ URL::asset('js/jquery.smooth.js') }}"></script>
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
<script src="{{ URL::asset('js/jquery_date.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/auction_bids.js') }}"></script>
<script src="{{ URL::asset('js/jquery_validate.js') }}"></script>
<script src="{{ URL::asset('js/subasta.js') }}"></script>
@stop