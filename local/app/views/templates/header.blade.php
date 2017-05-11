<div class="navbar-fixed">
<?php $data = Component::header();  ?>
	<nav class="mymenu">
		<div class="nav-wrapper gray-color">
			<div class="container">
				<div class="hide-on-med-and-down">
					<img onclick="location.href='{{ url('/') }} ';" class="brand-logo" style="margin-top: 11px; max-height: 40px; cursor: pointer;" src="{{ URL::asset('media/img/'.$data->header_logo.'') }}" alt="logo">
	     		</div>
	     		<div class="hide-on-large-only">
	     			<img onclick="location.href='{{ url('/') }} ';" class="brand-logo" style="margin-top: 10px; width: 165px; cursor: pointer;" src="{{ URL::asset('media/img/'.$data->header_logo.'') }}" alt="logo">
	     		</div>	
	     		<a href="#" data-activates="mobile-german" class="button-collapse"><i class="material-icons md-36">menu</i></a>			
				<ul id="topbar" class="right hide-on-med-and-down desktop">
					<li><a href="{{ url('/') }} " class="homepage">INICIO</a></li>
					<li><a href="{{ url('/subasta') }} " class="subasta">SUBASTA</a></li>
					<li><a href="{{ url('/servicios/monumental') }} " class="extraservices">OBRAS ESPECIALES</a></li>
					<li><a target="_blank" href="{{ url('/blog') }}">BLOG</a></li>
					<li><a href="{{ url('/german') }} " class="german">GERMAN ARZATE</a></li>
					<li><a href="{{ url('/contacto') }} " class="contacto">CONTACTO</a></li>
				</ul>
	    		<ul class="side-nav leftside-navigation ps-container ps-active-y mobile-nav" id="mobile-german">
					<li><a href="{{ url('/') }} " class="homepage">INICIO</a></li>
					<li><a href="{{ url('/subasta') }} " class="subasta">SUBASTA</a></li>
					<li><a href="{{ url('/servicios/monumental') }} " class="extraservices">OBRAS ESPECIALES</a></li>
					<li><a target="_blank" href="{{ url('/blog') }}">BLOG</a></li>
					<li><a href="{{ url('/german') }} " class="german">GERMAN ARZATE</a></li>
					<li><a href="{{ url('/contacto') }} " class="contacto">CONTACTO</a></li>
	    		</ul>
			</div>
		</div>
	</nav>
	<div class="choose-language">
		<label> ESP | <a href="{{ url('/en') }} ">ENG</a></label>
	</div>
</div>