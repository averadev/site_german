<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<meta name="description" content="German Arzate, Escultor Mexicano">
	    <meta name="keywords" content="Escultor Mexicano">
	    <meta name="author" content="German Arzate">
		<link rel="icon" href="{{ URL::asset('media/img/favicon.ico') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('media/img/apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" href="{{ URL::asset('media/img/favicon-32x32.png') }}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{ URL::asset('media/img/favicon-16x16.png') }}" sizes="16x16">
		<meta name="_token" content="{{ csrf_token() }}"/>
		<title>German Arzate</title>
		<!-- CSS  -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::asset('css/text-parser.css') }}">	
		<link rel="stylesheet" href="{{ URL::asset('css/materialize.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/plugins/threesixty/threesixty.css') }}">		
		<link rel="stylesheet" href="{{ URL::asset('css/style-timeline.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/app/ventas.css') }}">
		
		
	</head>
	<body>
		<div id="fb-root"></div> 
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
				fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
		</script>	
		<div  class="scrollspy" style="background-image: url('../../media/img/ventas/panorama_bg.jpg'); background-size: cover; position: relative; ">
			<div class="top-bar" >
				<a href="{{ url('/ventas/home') }}" class="back-arrow"><img src="../../media/img/ventas/left_arrow.svg"></a>
			</div>
			<img id="left-arrow-icon" class="hide" src="../../media/img/ventas/left_arrow.svg">			
			
			<div class="row no-margin-bottom"  >
				<div class="col s12" style="position: relative;" >
					<div class="threesixty car ">
						<img id="panorama-icon" class="hide" src="../../media/img/ventas/panorama_icon.svg">
						<div class="spinner">
							<span>0%</span>
						</div>
						<ol class="threesixty_images"></ol>
					</div>
					<div class="div-center">
						<img src="../../media/img/subasta_esculturas/{{$panorama->first()->filename}}" >
					</div>

				</div>
			</div>
		</div>
		<div  style="background-color: #1E1F23; position: relative; ">
			<nav id="navigation-menu" style="background-color: #1E1F23; z-index: 1000; position: absolute; ">
				<ul class="tabs-menu percent-tabs" style="background-color: #1E1F23; ">
					<li class="tab"><a href="#tab1">EL PROCESO</a></li>
					<li class="tab"><a href="#tab2">QUE REPRESENTA</a></li>
					<li class="tab"><a href="#tab3">VIDEO</a></li>
					<li class="tab"><a href="#tab4">LO QUE OPINA LA COMUNIDAD</a></li>
					<li class="tab"><a href="#tab5">MÁS OBRAS</a></li>
				</ul>
			</nav>
		</div>
		<!-- Proceso -->
		<article id="tab1" class="scrollspy" style="margin-top:50px;" >
			<div style="color: white; background-size: cover; background-image: url('../../media/img/ventas/proceso_ventas_bg.jpg');">
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
												<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso" >
										</div>
										<div class="col l3 s12 text-padding" >
											<h5 class="light proceso_top">1. {{$submodule_section_data->SeccionSubTProcesoConcepto}}</h5>
											<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoConcepto}}</p>
										</div>
										<div class="col l5 s12">
											<img alt="{{$submodule_section_data->SeccionIMGConcepto2_alt}}" class="hide-on-med-and-down img2_proceso" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto2}}">
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
			    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso">
										</div>
										<div class="col l3 s12 text-padding">
											<h5 class="light proceso_top">2. {{$submodule_section_data->SeccionSubTProcesoSuenos}}</h5>
											<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoSuenos}}</p>
										</div>
										<div class="col l5 s12">
			    	  						<img alt="{{$submodule_section_data->SeccionIMGSuenos_alt}}" class="hide-on-med-and-down img2_proceso" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGSuenos}}">
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
			    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}" class="hide-on-med-and-down img_proceso">
										</div>
										<div class="col l3 s12 text-padding">
											<h5 class="light proceso_top">3. {{$submodule_section_data->SeccionSubTProcesoMagia}}</h5>
											<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoMagia}}</p>
										</div>
										<div class="col l5 s12">
			    	  						<img alt="{{$submodule_section_data->SeccionIMGMagia_alt}}" class="hide-on-med-and-down img2_proceso" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGMagia}}">
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
			    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}"  class="hide-on-med-and-down img_proceso">
										</div>
										<div class="col l3 s12 text-padding">
											<h5 class="light proceso_top">4. {{$submodule_section_data->SeccionSubTProcesoPasion}}</h5>
											<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoPasion}}</p>
										</div>
										<div class="col l5 s12">
			    	  						<img alt="{{$submodule_section_data->SeccionIMGPasion_alt}}"  class="hide-on-med-and-down img2_proceso" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGPasion}}">
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
			    	  						<img alt="{{$submodule_section_data->SeccionIMGConcepto_alt}}" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGConcepto}}"  class="hide-on-med-and-down img_proceso">
										</div>
										<div class="col l3 s12 text-padding">
											<h5 class="light proceso_top">5. {{$submodule_section_data->SeccionSubTProcesoLuz}}</h5>
											<p class="proceso-text justify-text2">{{$submodule_section_data->SeccionDescProcesoLuz}}</p>
										</div>
										<div class="col l5 s12">
			    	  						<img alt="{{$submodule_section_data->SeccionIMGLuz_alt}}" class="hide-on-med-and-down img2_proceso" src="../../media/img/subasta/{{$submodule_section_data->SeccionIMGLuz}}">
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
						<div class="events ventas">
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
		
		<!-- QUE REPRESENTA -->
		<article id="tab2" class="scrollspy">
			<div style="color: white; background-size: cover; background-image: url('../../media/img/ventas/proceso_ventas_bg.jpg');">
				<div class="container padding-section " >
					<div class="row no-margin-bottom">
						<div class="col l6 m6 s12">
							<img src="../../media/img/ventas/escultura_representa.png" style="width: 100%;" >
						</div>
						<div class="col l6 m6 s12">
							<p style="margin-top: 12%;" class="gb_top_x3 title-representa"><span class="size-x45">Inspiración </span> <span class="size-x25">en los sueños y en el<br>
								cantar del zwampath del barril.</span><br>
							</p>
							<div class="row no-margin-bottom">
								<div class=" col l10 s12 center-align" >
									<p class="text-obras">
										Poseidón nace de la fuerza de la relación que tengo con el mar desde pequeño, esta obra esta hecha con polizethano mundo donde la naturaleza, el misticismo, la magia, el erotismo, el dolor y la pasipon entrelazan para dar forma material. Rey godo de España, fue exhumado y trasladado en una caja de zic que pesó un kilo.
									</p>
									<a class="waves-effect waves-light btn btn-more">Conocer más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

		<!-- VIDEO -->
		<article id="tab3" class="scrollspy">
			<div style="color: white; background-size: cover; background-image: url('../../media/img/ventas/proceso_ventas_bg.jpg');">
				<div class="container padding-section" >
					<div class="row no-margin-bottom">
						<div class="col l10 offset-l1 s12">
							<div class="videoWrapper">
								<iframe width="560" height="349" src="https://www.youtube.com/embed/AutFXcCcxXs"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

		<!-- LO QUE OPINA LA COMUNIDAD -->
		<article  >
			<div id="tab4" class="scrollspy padding-section" style="color: white; background-size: cover; background-image: url('../../media/img/ventas/proceso_ventas_bg.jpg');">
				<div class="container " style="width: 90%; " >
					<div class="row no-margin-bottom">
						<div class="col l5 s12"  >
							<div class="fb-like" 
								data-href="https://developers.facebook.com/docs/plugins/" 
								data-layout="button_count" 
								data-action="like" 
								data-show-faces="false">
							</div>
							<div  class="fb-div">
								<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/" data-numposts="10" data-mobile="true" ></div>
							</div>
						</div>
						<div class="col l7 s12 gold-font mob-divider " >
							<p class="title-comunity">
								<span class="size-x3">Lo que comenta la comunidad sobre </span>
								<span class="size-x5"> Poseidón </span>	
							</p>
							<div class="col s6" >
								<img src="../../media/img/ventas/facebook_like.svg"  class="social-icon">
								<p class="social-number">
									<span class="size-x4">
										{{$fblikes}}
									</span>
								</p>								
								<p class="social-span">
									<span class="size-x2">
										ME GUSTA
									</span>
								</p>
							</div>
							<div class="col s6" >
								<img src="../../media/img/ventas/chat.svg"  class="social-icon" >
								<p class="social-number">
									<span class="size-x4">
										{{$fbcomments}}
									</span>
								</p>
								<p class="social-span">
									<span class="size-x2">
										COMENTARIOS
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

		<!-- MAS OBRAS -->

		<article id="tab5" class="scrollspy" >
			<div  class="padding-section" style="color: white; background-size: cover; background-image: url('../../media/img/ventas/proceso_ventas_bg.jpg'); position: relative; ">
			<img id="prev-sculpt" src="../../media/img/ventas/sculp_left.svg" >
			<img id="next-sculpt" src="../../media/img/ventas/sculp_right.svg" >	
				<div class="container"  >
					<div class="row no-margin-bottom">
						<div class="col l12 s12 " >
						<p class="title-esculturas"><span class="size-x35" >Conoce otras obras relacionadas</span></p>
							<div class="carousel">
								@foreach( $sculptures as $key => $sculpture )
									 <a class="carousel-item" ><img class="circle"  src="../../media/img/subasta_esculturas/{{$sculpture->filename}}"></a>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

	</body>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ URL::asset('vendor/plugins/threesixty/threesixty.min.js') }}" ></script>
	<script src="{{ URL::asset('vendor/plugins/materialize.min.js') }}" ></script>
	<script src="{{ URL::asset('js/saleinfo.js') }} "></script>
	<script src="{{ URL::asset('vendor/plugins/timeline.js') }} "></script>
	<script type="text/javascript">
		var $panoramaJson = <?php echo json_encode($panorama); ?>;
	</script>
</html>



