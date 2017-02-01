<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>German Arzate</title>
	<!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/text-parser.css') }}">	
	<link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/tabModule.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style-timeline.css') }}">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	
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

