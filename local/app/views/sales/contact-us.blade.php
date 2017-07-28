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
	<link rel="stylesheet" href="{{ URL::asset('/vendor/plugins/fullscreen/style7.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
	
	.ga-title-name-contact-us {
		color: #fff;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: 0;
	}

	.ga-subtitle-name-contact-us {
		color: #fff;
		font-size: 20px;
		text-align: center;
		line-height: normal;
	}

	.ga-contact-social a {
		color: #fff;
	}

	.ga-contact-social a i {
		color: #fff;
		font-size: 28px;
	}

	.ga-title-contact-info {
		color: #fff;
		font-size: 40px;
		font-weight: bold;
		font-style: italic;
		line-height: normal;
	}

	.ga-description-contact-info {
		color: #fff;
		font-size: 16px;
		line-height: normal;
	}

	.ga-contact-info-phone {
		color: #fff;
		font-size: 40px;
		font-weight: bold;
		line-height: 0;
		letter-spacing: 4px;
	}

	.ga-contact-info-email {
		color: #fff;
		font-size: 20px;
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

	.ga-melon:hover {
		background-color: #c9a07f;
	}

	.ga-bold {
		font-weight: bold;
	}

	.ga-black {
		background-color: #12161a;
	}

	.cont {
		min-height: 100%;
		position: fixed;
		width: 100%;
	}

	.ft {
		bottom: 0;
		height: auto;
		background: #12161a;
		padding: 1px;
	}

	.ft img {
		left: 50%;
		margin-left: -30%;
	}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>
	<!-- <div id="banner" class="fullpage" style="background: rgb(25,30,36) url('../media/img/ventas/ventashome.jpg');"> -->
		<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
		<section style="position: relative; background: rgb(25,30,36); overflow: hidden;">
			<div class="row">
				<div class="col l4 m4" style="position: relative; background: red; min-height: 100vh; height: 100vh; overflow: hidden;">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fugiat asperiores, velit consequatur! Error porro, ea quis aut possimus repellendus odio unde nobis expedita ratione autem reprehenderit quidem velit minima!</p>
				</div>
				<div class="col l8 m8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fugiat asperiores, velit consequatur! Error porro, ea quis aut possimus repellendus odio unde nobis expedita ratione autem reprehenderit quidem velit minima!</p>
				</div>
			</div>
		</section>
	<!-- </div> -->
	<div class="overlay overlay-contentpush">
		<button class="menu-icon" id="close-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
		<nav id="nav-home">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Work</a></li>
				<li><a href="#">Clients</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>		
</body>
<script type="text/javascript">
	var HOST = "{{URL::to('/')}}";
</script>
	{{HTML::script('/vendor/plugins/fullscreen/modernizr.js')}}
	{{HTML::script('/vendor/plugins/fullscreen/classie.js')}}
	{{HTML::script('/vendor/plugins/fullscreen/demo7.js')}}
</html>