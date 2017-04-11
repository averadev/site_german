<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
	<link rel="icon" href="{{ URL::asset('media/img/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('media/img/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ URL::asset('media/img/favicon-32x32.png') }}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{ URL::asset('media/img/favicon-16x16.png') }}" sizes="16x16">
	<title>German Arzate</title>
	<!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/text-parser.css') }}">	
	<link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/tabModule.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style-timeline.css') }}">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ URL::asset('js/siema.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
@include('templates.header')
@yield('content')
<script type="text/javascript">
	    var HOST = "{{URL::to('/')}}";
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
</script>
@include('templates.footer')
@yield('addJs')
</body>
</html>

