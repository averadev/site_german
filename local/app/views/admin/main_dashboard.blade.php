<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Admin | German Arzate</title>
	<!-- CSS  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	
</head>
<body>
@include('admin.header')
@yield('content')
<script type="text/javascript">
	    var HOST = "{{URL::to('/')}}";
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
</script>
@include('admin.footer')
@yield('addJs')
</body>
</html>
