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

		<link rel="stylesheet" href="{{ URL::asset('/vendor/plugins/fullscreen/menu.css') }}">
		<style type="text/css">
			#trigger-overlay{
				position: absolute;
				width: 4.5%;
				left:3%;
				top:6.5%;
				z-index: 1000;
				cursor: pointer; 
			}

			.menu-icon img {
				display: block;
				height: auto;  
				width: 100%;
			}
			
			.menu-icon{
				position: absolute;
				width: 4.5%;
				left:3%;
				top:6.5%;
				z-index: 1000;
				cursor: pointer; 
				background: none !important;
				border: none;
				padding: 0;
			}

			#nav-home{
				background: none !important;
				box-shadow: none;
			}

		</style>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	</head>
	<body>
		<div id="banner" class="fullpage" style="background-image: url('media/img/ventas/ventashome.jpg');" >
			<button class="menu-icon" id="trigger-menu"><img src="media/img/ventas/menu-circular-button.svg"></button>
			<div class="inner">
				<div class="row" >
					<div class="col l6 m7 s9 right fontCrimson right-title-space">
						<p class="main-title">''Quiero mostrar como legado todo lo que me apasiona, el legado personal del cual estoy enamorado.''</p>
						<p class="sculptor-name" >- German Arzate.</p>
						<p class="main-title par">Soy un apasionado de la vida, del amor y todo lo que me rodea. Siempre estoy en búsqueda de situaciones y sé que todo lo que está afuera, en la naturaleza, es parte de mí...</p>	
						<a href="{{URL::to('/ventas/obra/sarcofago-egipcio')}}" class="waves-effect waves-light btn  blue-grey darken-2 ">Ver obra</a>
						
					</div>
				</div>
			</div>
		</div>
		<div class="overlay overlay-contentpush">
			<button class="menu-icon" id="close-menu"><img src="media/img/ventas/menu-circular-button.svg"></button>
			<nav id="nav-home">
				<ul>
					<li><a href="#">Biografia</a></li>
					<li><a href="#">Cv de artista</a></li>
					<li><a href="#">Obras</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</body>
	
	<script type="text/javascript">
		var HOST = "{{URL::to('/')}}";
	</script>

	{{HTML::script('/vendor/plugins/fullscreen/modernizr.js')}}
	{{HTML::script('/vendor/plugins/fullscreen/classie.js')}}
	{{HTML::script('/vendor/plugins/fullscreen/menu.js')}}

</html>

