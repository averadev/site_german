<nav class="mymenu">
	<div class="nav-wrapper gray-color">
		<div class="container">
			<div class="hide-on-med-and-down">
				<img class="brand-logo" style="margin-top: 11px; width: 160px;" src="{{ URL::asset('media/img/home/logo.png') }}" alt="logo">
     		</div>
     		<div class="hide-on-large-only">
     			<img class="brand-logo" style="margin-top: 10px; margin-left: 35px; width: 165px;" src="{{ URL::asset('media/img/home/logo.png') }}" alt="logo">
     		</div>	
     		<a href="#" data-activates="mobile-german" class="button-collapse"><i class="material-icons md-36">menu</i></a>			
			<ul id="topbar" class="right hide-on-med-and-down desktop">
				<li><a class="homepage" >INICIO</a></li>
				<li><a class="subasta" >SUBASTA</a></li>
				<li><a class="extraservices" >SERVICIOS EXTRA</a></li>
				<li><a href="#!">NOTAS DE PRENSA</a></li>
				<li><a class="german">GERMAN ARZATE</a></li>
				<li><a class="contacto" >CONTACTO</a></li>
			</ul>
    		<ul class="side-nav leftside-navigation ps-container ps-active-y mobile-nav" id="mobile-german">
				<li><a class="homepage" >INICIO</a></li>
				<li><a class="subasta" >SUBASTA</a></li>
				<li><a class="extraservices" >SERVICIOS EXTRA</a></li>
				<li><a href="#!">NOTAS DE PRENSA</a></li>
				<li><a class="german">GERMAN ARZATE</a></li>
				<li><a class="contacto" >CONTACTO</a></li>
    		</ul>
		</div>
	</div>
</nav>

<script type="text/javascript">

	$(".subasta").click(function(event) {
		window.location.href=HOST+"/subasta";
	});
	$(".homepage").click(function(event) {
		window.location.href=HOST;
	});
	$(".extraservices").click(function(event) {
		window.location.href=HOST+"/servicios/monumental";
	});
	$(".contacto").click(function(event) {
		window.location.href=HOST+"/contacto";
	});		
	$(".german").click(function(event) {
		window.location.href=HOST+"/german";
	});

</script>