<nav class="mymenu">
	<div class="nav-wrapper gray-color">
		<div class="container">
			<img class="brand-logo" style="margin-top: 0.35em" src="{{ URL::asset('media/img/home/logo.png') }}" alt="logo">
			<ul id="topbar" class="right hide-on-med-and-down">
				<li><a id="homepage" >INICIO</a></li>
				<li><a id="subasta" >SUBASTA</a></li>
				<li><a id="extraservices" >SERVICIOS EXTRA</a></li>
				<li><a href="#!">NOTAS DE PRENSA</a></li>
				<li><a id="german">GERMAN ARZATE</a></li>
				<li><a id="contacto" >CONTACTO</a></li>
			</ul>
		</div>
	</div>
</nav>

<script type="text/javascript">

	$("#subasta").click(function(event) {
		window.location.href=HOST+"/subasta";
	});
	$("#homepage").click(function(event) {
		window.location.href=HOST;
	});
	$("#extraservices").click(function(event) {
		window.location.href=HOST+"/servicios/monumental";
	});
	$("#contacto").click(function(event) {
		window.location.href=HOST+"/contacto";
	});		
	$("#german").click(function(event) {
		window.location.href=HOST+"/german";
	});	

</script>