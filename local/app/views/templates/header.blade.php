<div class="navbar-fixed">
<?php $data = Component::header();  ?>
	<nav class="mymenu">
		<div class="nav-wrapper gray-color">
			<div class="container">
				<div class="hide-on-med-and-down">
					<img class="brand-logo" style="margin-top: 11px; max-height: 40px; cursor: pointer;" src="{{ URL::asset('media/img/'.$data->header_logo.'') }}" alt="logo">
	     		</div>
	     		<div class="hide-on-large-only">
	     			<img class="brand-logo" style="margin-top: 10px; margin-left: 35px; width: 165px; cursor: pointer;" src="{{ URL::asset('media/img/'.$data->header_logo.'') }}" alt="logo">
	     		</div>	
	     		<a href="#" data-activates="mobile-german" class="button-collapse"><i class="material-icons md-36">menu</i></a>			
				<ul id="topbar" class="right hide-on-med-and-down desktop">
					<li><a class="homepage">INICIO</a></li>
					<li><a class="subasta">SUBASTA</a></li>
					<li><a class="extraservices">OBRAS ESPECIALES</a></li>
					<li><a href="#!">NOTAS DE PRENSA</a></li>
					<li><a class="german">GERMAN ARZATE</a></li>
					<li><a class="contacto">CONTACTO</a></li>
				</ul>
	    		<ul class="side-nav leftside-navigation ps-container ps-active-y mobile-nav" id="mobile-german">
					<li><a class="homepage">INICIO</a></li>
					<li><a class="subasta">SUBASTA</a></li>
					<li><a class="extraservices">OBRAS ESPECIALES</a></li>
					<li><a href="#!">NOTAS DE PRENSA</a></li>
					<li><a class="german">GERMAN ARZATE</a></li>
					<li><a class="contacto">CONTACTO</a></li>
	    		</ul>
			</div>
		</div>
	</nav>
</div>

<script type="text/javascript">

	$(".brand-logo").click(function(event) {
		window.location.href=HOST;
	});
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