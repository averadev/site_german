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
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">
	.fullpage.overlay-open::after {
		visibility: hidden;
		opacity: 1;
		-webkit-transition: opacity 0.5s;
		transition: opacity 0.5s;
	}

	.overlay-contentpush.open {
		-webkit-transition: all 500ms ease 0ms;
		-moz-transition: all 500ms ease 0ms;
		-o-transition: all 500ms ease 0ms;
		transition: all 500ms ease 0ms;
	}

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
		width: 52px;
	}
	
	.menu-icon {
		position: absolute;
		width: 4.5%;
		left:30px;
		top:15px;
		z-index: 1000;
		cursor: pointer; 
		background: none !important;
		border: none;
		padding: 0;
		-webkit-transition: opacity .25s ease;
		transition: opacity .25s ease;
	}

	.menu-icon:hover {
		opacity: .7;
	}

	#nav-home {
		background: none !important;
		box-shadow: none;
	}
	
	.ga-title-name {
		color: #c79a73;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: 0;
	}

	.ga-subtitle-name {
		color: #c79a73;
		font-size: 24px;
		font-style: italic;
		line-height: 0;
	}

	.ga-text-biography {
		color: #fff;
		font-size: 24px;
		text-align: center;
		margin-bottom: 0rem;
		margin-top: 0rem;
	}

	.ga-social-networks li a i {
		color: #fff;
		font-size: 30px;
	}

	.main-nav {
		width: 100%;
		height: 100%;
		position: fixed;
		top: 0;
		overflow-y: auto;
		z-index: 1599;
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…IgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
		background: -moz-linear-gradient(left, rgba(105,75,155,0.9) 0%, rgba(105,75,155,0.9) 19%, rgba(242,1,56,0.9) 99%, rgba(242,1,56,0.9) 100%);
		background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(105,75,155,0.9)), color-stop(19%,rgba(105,75,155,0.9)), color-stop(99%,rgba(242,1,56,0.9)), color-stop(100%,rgba(242,1,56,0.9)));
		background: -webkit-linear-gradient(left, rgba(105,75,155,0.9) 0%,rgba(105,75,155,0.9) 19%,rgba(242,1,56,0.9) 99%,rgba(242,1,56,0.9) 100%);
		background: -o-linear-gradient(left, rgba(105,75,155,0.9) 0%,rgba(105,75,155,0.9) 19%,rgba(242,1,56,0.9) 99%,rgba(242,1,56,0.9) 100%);
		background: -ms-linear-gradient(left, rgba(105,75,155,0.9) 0%,rgba(105,75,155,0.9) 19%,rgba(242,1,56,0.9) 99%,rgba(242,1,56,0.9) 100%);
		background: linear-gradient(to right, rgba(105,75,155,0.9) 0%,rgba(105,75,155,0.9) 19%,rgba(242,1,56,0.9) 99%,rgba(242,1,56,0.9) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6694b9b', endColorstr='#e6f20138',GradientType=1 );
	}

	.main-nav-menu {
		list-style: none;
		padding: 0;
		text-align: left;
		width: 75%;
		height: 100%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 225px;
		position: relative;
	}

	.main-nav-menu li {
		padding: 0;
	}

	.main-nav-menu li a.main-nav-link {
		color: #fff!important;
	}

	.main-nav-menu li a.main-nav-link {
		font-family: "Crimson Text", sans-serif;
		font-weight: 200;
		font-size: 33px;
		font-style: italic;
		line-height: 24px;
		text-decoration: none;
		-webkit-transition: all .3s linear;
		-moz-transition: all .3s linear;
		-ms-transition: all .3s linear;
		-o-transition: all .3s linear;
		transition: all .3s linear;
	}

	.main-nav-menu a.main-nav-link, .main-nav-menu div.main-nav-link {
		position: relative;
		display: inline-block;
		margin: 0px 25px;
		outline: none;
		text-decoration: none;
		padding: 20px 30px;
		width: 320px;
	}

	.letter-spacing {
		letter-spacing: 2px;
	}

	.menu .social {
		position: absolute;
		left: 0px;
		bottom: 15px;
		right: 0px;
		text-align: center;
	}

	.container-menu-overlay {
		position: fixed; 
		width: 100%; 
		height: 100%; 
		top: 0; 
		left: 0; 
		bottom: 0; 
		right: 0;
	}

	.social .btns {
		margin: 0px 15px;
		display: inline-block;
		background: no-repeat center;
	}

	.socials {
		color: #fff;
		font-size: 30px;
		line-height: 30px;
		padding: 15px;
	}

	.main-nav-link {
		padding: 15px 21px;
	}

	.logomarginright {
		margin-right: 15px;
	}

	.menu-icon .menu-text {
		color: #c79a73;
		position: absolute;
		font-family: "Crimson Text", sans-serif;
		font-size: 16px;
		letter-spacing: 3px;
		text-transform: uppercase;
		width: 80px;
		left: 75%;
		text-align: center;
		top: 25%;
	}

	.main-nav-menu li a.main-nav-link:hover, .main-nav-menu li a.main-nav-link.active {
		color: #c79a73 !important;
		border-left: 1px solid #c79a73;
		padding: 20px 30px !important;
	}

	/* Contact */

	.ga-title-name-contact-us {
		color: #fff;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: 0;
	}

	.ba-radius50 {
		-webkit-border-radius: 50px;
		-moz-border-radius: 50px;
		-o-border-radius: 50px;
		border-radius: 50px;
	}

	.ga-melon {
		background-color: #c9a07f;
	}

	.ga-melon:hover, .ga-melon:focus {
		background-color: #c9a07f;
	}

	.ga-bold {
		font-weight: bold;
	}

	.contact-form.input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea {
		color: #fff;
		font-style: italic;
		background: transparent !important;
		border-bottom: 2px solid #3a444f;
	}

	</style>
	<!-- Google Analytics -->
</head>
<body>
<!-- begin menu overlay -->
<div class="main-nav overlay overlay-contentpush fullpage">
	<button class="menu-icon" id="close-menu">
		<img src="../media/img/ventas/menu-circular-button-close.svg" width="52">
		<span class="menu-text hide-on-small-only hide-on-med-only">MENU</span>
	</button>
	<div class="container-menu-overlay">
		<div class="row">
			<article class="col s12 m12 l6" style="background: rgb(25,30,36); min-height: 100vh; height: 100%;">
				<div id="" class="row">
					<div class="col s12 m12 l4"></div>
						<div class="col s12 m12 l4">
							<ul class="main-nav-menu main-nav-menu-effect">
								<!-- <li><a class="main-nav-link letter-spacing active" href="{{ URL::to('/ventas') }}">Inicio</a></li> -->
								<li><a class="main-nav-link letter-spacing" href="{{ URL::to('/ventas/biography') }}">Biografia</a></li>
								<li><a class="main-nav-link letter-spacing" href="{{ URL::to('/ventas/cv-artist') }}">Cv de artista</a></li>
								<li><a class="main-nav-link letter-spacing" href="{{ URL::to('/ventas/works') }}">Obras</a></li>
								<li><a class="main-nav-link letter-spacing" href="{{ URL::to('/ventas/contact') }}">Contacto</a></li>
							</ul>
						</div>
					<div class="col s12 m12 l4"></div>
				</div>
				<div class="social" style="background: #12161a; position: absolute; left: 0px; bottom: 0px; right: 0px; text-align: center; width: 50%;">
					<div class="main-nav-link">
						<div class="box_logo">
							<a href="{{ URL::to('/ventas/home') }}"><img class="img-logo-min logomarginright" alt="Logo German Arzate" src="{{ URL::asset('media/img/german-logo-v2.svg') }}" width="180"></a>
							<a href="https://www.facebook.com/GermanArzateSculptor/"><img class="img-logo-min logomarginright" src="{{ URL::asset('media/img/facebook.svg') }}" width="25"></a>
							<a href="https://twitter.com/germanarzate"><img class="img-logo-min logomarginright" src="{{ URL::asset('media/img/twitter.svg') }}" width="25"></a>
						</div>
					</div>
				</div>
			</article>
			<article class="col s12 m12 l6" style="background: rgb(25,30,36) url('../media/img/ventas/bg-menu-right.jpg') no-repeat; background-position: 30% 50%; min-height: 100vh; height: 100%;">
			</article>
		</div>
	</div>
</div>
<!-- end menu overlay -->

@yield('content')

<!-- JS -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script type="text/javascript">
	var HOST = "{{URL::to('/')}}";
</script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('/vendor/plugins/jquery.validate.min.js ') }}"></script>
{{HTML::script('/vendor/plugins/fullscreen/modernizr.js')}}
{{HTML::script('/vendor/plugins/fullscreen/classie.js')}}
{{HTML::script('/vendor/plugins/fullscreen/menu.js')}}
</body>
</html>