<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>Admin | German Arzate</title>
	<!-- CSS  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/style-admin.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.16/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" href="{{ URL::asset('vendor/plugins/line-editor/editor.css') }}">

	<style type="text/css">
		.side-nav a {
			padding: 0 19px;
		}
		.side-nav .collapsible-body li a, .side-nav.fixed .collapsible-body li a {
			padding: 0 23.5px 0 0;
		}
		.collapsible-body {
			padding: 0rem;
		}
	</style>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.5.9/perfect-scrollbar.min.js"></script>

</head>
<body>
<div id="animationmatrix" class="loader hideme" >

</div>
@include('admin.topmenu')
<div id="main">
	<div class="wrapper">	
		@include('admin.navbar')
		@yield('content')
	</div>
</div>

<script type="text/javascript">

	var HOST = "{{URL::to('/')}}";
	$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	if (typeof jQuery.fn.live == 'undefined' || !(jQuery.isFunction(jQuery.fn.live))) {
		jQuery.fn.extend({
			live: function (event, callback) {
				if (this.selector) 
				{
					jQuery(document).on(event, this.selector, callback);
				}
			}
		});
	}
	var f = $(".page-topbar").height();
	var g = window.innerHeight - f;
	$(".leftside-navigation").height(g).perfectScrollbar({
	suppressScrollX: !0
	});

</script>
@include('admin.footer')
@yield('addJs')
</body>
</html>
