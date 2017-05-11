@extends('templates.main')
@section('content')
	<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">	
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<div class="row center">
					<p class=" title-home crimson-bold-italic small-spacing">{{$data->homeBannerTxt}}</p>
					<p class="subtitle-home crimson-bold-italic small-spacing">{{$data->homeBannerTxt2}}</p>
					<img id="movedown" src="media/img/home/scroll.png" alt="scroll">
				</div>
				<br><br>
			</div>
		</div>
		<div class="parallax"><img src="media/img/home/{{$data->homeBanner}}" alt="banner"></div>
	</div>
	<div id="section1" class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 m8 l8">
					 <p class="par-title max-light">{{$data->auctionTitle}}</p>
				</div>
				<div class="col s12 m4 l4">
					<p class="bold-normal">Hasta el 21 de Noviembre de 2017</p>
					<a href="{{ url('/subasta#tab3') }}" class="waves-effect grey lighten-5 grey-border btn gb_noboxshadow"><i class="material-icons right" style="margin-left: -3px;">navigate_next</i>Ver obra</a>
				</div>
			</div>
		</div>
	</div>
	<!-- C A R D S -->
	<div class="container">
		<div class="section no-pad">
			<div class="bottomRule">
			</div>
			<div class="row">
				<div class="col s12 m12 l8  margin-top-1">
					<div class="row">
						<div class="col s1"> <!-- required for floating -->
							<!-- Nav tabs -->
							<ul class="nav nav-tabs tabs-left sideways">
								<li class="active"><a href="#home-v" data-toggle="tab">ESCULTURA</a></li>
								<li><a href="#profile-v" data-toggle="tab">OFERTAS</a></li>
								<li><a href="#messages-v" data-toggle="tab">GERMAN</a></li>
							</ul>
						</div>
						<div class="col s11">
							<!-- Tab panes -->
							<div class="tab-content tab-bg-color" style="margin-top: 2px;">
								<div class="tab-pane active" id="home-v">
									<div class="row">
										<div class="tab-space tab-height">
										@if( count($auction)>0 )
											<div class="hide-on-small-only">
												<div class="col s5">
													<div class="row">
														<h5 class="large-spacing fontCrimson gb_bold"> {{$auction->name}} </h5>
															{{$auction->detail}}
													</div>
												</div>
												<div class="col s7">
													<div class="row">
														<img class="auction-image" src="{{ count($auction->images)<1 ? 'media/img/no_image.jpg' : 'media/img/subasta_esculturas/'.$auction->images->first()->filename }}">
													</div>
												</div>
											</div>
											<div class="col s11 hide-on-med-and-up">
												<div class="row">
													<div class="card" style="background-color: #EBEBEB">
														<div class="card-image waves-effect waves-block waves-light">
															<img  style="width: 15em" class="activator min-height-auto" src="{{ count($auction->images)<1 ? 'media/img/no_image.jpg' : 'media/img/subasta_esculturas/'.$auction->images->first()->filename }}">
														</div>
														<div class="card-content">
															<span style="font-size: 1em; line-height: 100%;" class="large-spacing activator card-title">{{$auction->name}}<i class="material-icons right">more_vert</i></span>
														</div>
														<div class="card-reveal" style="background-color:#EBEBEB">
															<span style="font-size: 1em; line-height: 100%;" class="large-spacing activator card-title">{{$auction->name}}<i class="material-icons right">close</i></span>
															<p>{{$auction->detail}}</p>
														</div>
													</div>
												</div>
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profile-v"> <!--Tab ofertas -->
									<div class="row no-margin-bottom">
										<div style="min-height: 340px; padding-top: 0.5rem; " class="tab-space">
											@if( count($auction)>0 )
											<div class="col l5 s12" >
												<div class="row no-margin-bottom">
													<h5 class="large-spacing fontCrimson gb_bold" style="padding-top: 1.5rem;" > {{$auction->name}} </h5>
													<div class="hide-on-med-and-down">
														<h6 class="small-spacing fontCrimson gb_bold"> Número de ofertas totales: </h6>
														<p id="boxdigits" class="med-light digitsBox">
														@foreach($bidsFormat as $index => $val )
															@if($index>0)
																<span class="totalBids no-left-border">{{$val}}</span>
															@else
																<span class="totalBids">{{$val}}</span>@endif
														@endforeach
														</p>
													</div>
													<div class="hide-on-large-only">
														<h6 class="small-spacing fontCrimson gb_bold"> Número de ofertas totales: {{$totalbids}} </h6>
													</div>
												</div>
											</div>
											<div class="col l7 s12">
												<div id="bid_div" class="row no-margin-bottom" style="margin-right: 10px;" >
												<label>Últimas ofertas:</label>
													<ul id="bidsList" class="collection">
													@foreach($bids as $bid)
														<li class="collection-item avatar">
															<span class="title">{{$bid->nick}}</span>
															<p class="date-ago">{{$bid->dayDate}} de {{$bid->monthDate}}</p>
															<p class="bid-amount">${{$bid->amount}}</p>
														</li>
													@endforeach
													</ul>
												</div>
												<p id="showMoreButton" class="showMore">Ver más ofertas <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i> </p>
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="tab-pane" id="messages-v"> <!-- Tab german -->
									<div style="min-height: 340px; padding-right: 5%;" class="tab-space">
										{{$data->german}}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12" style="margin-top: -45px;">
							<a href="{{ url('/subasta/subastas#tab6') }}" style="margin-left: 1em;" class="waves-effect green right btn gb_noboxshadow">OFERTAR</a>
							<a href="{{ url('/subasta#tab3') }}" style="padding-left: 15px; padding-right: 10px;" class="waves-effect grey right lighten-5 grey-border btn gb_noboxshadow"><i class="material-icons right" style="margin-left: -3px;">navigate_next</i>VER ESCULTURA</a>
						</div>
					</div>
				</div>
				<div class="col s12 m12 l4 margin-top-1">
					<div style="position: relative;">
						<h5 class="light">Comentarios</h5>
						<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><img style="position: absolute; right: 70px; top: 3px;" class="social-button" alt="facebook" src="{{ URL::asset('media/img/home/'.$data->fbpic.'') }}"></a>
						<a href="https://www.instagram.com/germanarzatesculptor/" target="_blank"><img style="position: absolute; right: 35px; top: 3px;" class="social-button" alt="instagram" src="{{ URL::asset('media/img/home/'.$data->instapic.'') }}"></a>
					</div>
					<div class="bottomRule">
					</div>
					<div class="col s12">
						<div id="listCommentsHome"></div>
						<div class="right-align"><a href="{{ url('/subasta/comentarios#tab5') }}" id="showMoreComments" class="showMore underline">Ver más comentarios</a></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- N O T A S - D E - P R E N S A -->
	<div class="grey-bg">
		<div class="container">
			<div class="section no-pad">
				<div class="row"  style="margin-bottom: 0em;">
					<div class="col s12 center">
						<p class="header-blogs col s12 light">{{$data->titleBlogEntries}}</p>
					</div>
			@foreach($feeds as $feed)			
					<div class="col s12 m12 l4">
						<div class="card">
							<div class="card-image crop">								
								<img src="{{$feed->image}}">
							</div>
							<div class="card-content">
								<span class="card-title truncate">{{$feed->title}}</span>
							<div style="margin-top: 15px; margin-bottom: 13px; " >
							<div style="display: flex; align-items: center;">
								<div class="med-square"><img src="media/img/home/reloj.png"></div>
								<div style="padding: 8px; border: 1px solid #636363;" >
									{{$feed->postdate}}
								</div>
							</div>
							</div>
								<p class="trunc" >{{$feed->description}}</p>...
							</div>
							<div onclick="window.open('{{$feed->image_url}}','_blank');" class="card-action waves-effect hoverable" style="padding-top: 0px; padding-bottom: 0px;" >
								<div style="  display: flex; align-items: center;" >
									<div class="square">
										<i class="material-icons">expand_more</i>
									</div> <p style="margin-left: 5px; font-size: 0.8em; font-weight: bold; ">LEER MÁS</p>
								</div>
							</div>
						</div>
					</div>
				@endforeach
					<div class="col s12 center">
						<a target="_blank" href="{{$bloglink}}" class="footer-blogs col s12 light">{{$data->footerBlogEntries}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/init.js"></script>
	<script src="js/tabModule.js"></script>
	<script src="vendor/js/jquery.smooth-scroll.min.js"></script>
	<script src="js/script.js"></script>
@stop
