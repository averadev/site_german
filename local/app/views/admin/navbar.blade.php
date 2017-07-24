	<aside id="left-sidebar-nav">
		<ul id="slide-out" class="side-nav fixed collapsible collapsible-accordion" style="width: 240px; background-color: #4F4F4F;">
			<div class="row">
				<div class="col s12" style="margin-top: 10%; margin-bottom: 5%; " >
					<div class="col s10 offset-s1">
						<img  style="width: 100%; padding: 20% 10% 20% 10%; background-color: black; " src="{{ URL::asset('media/img/home/logoblanco.png') }}" alt="logo">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12" style="padding: 1rem;" >
					<div class="row">
						<ul id="changelng" class="lang-switch">
							@if(Session::get('lang') == 1 )
								<li class="active"  ><a href="{{ url('/admin/language/1') }}">ESP</a></li>
								<li><a href="{{ url('/admin/language/2') }}">ING</a></li>
							@elseif(Session::get('lang') == 2 )
								<li ><a href="{{ url('/admin/language/1') }}">ESP</a></li>
								<li class="active" ><a href="{{ url('/admin/language/2') }}">ING</a></li>
							@else
								<li ><a href="{{ url('/admin/language/1') }}">ESP</a></li>
								<li ><a href="{{ url('/admin/language/2') }}">ING</a></li>							
							@endif
						</ul>
					</div>
				</div>
			</div>
			<li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ $activeModule == 'a' ? 'active' : '' }}">Esculturas</a>
				<div class="collapsible-body">
					<ul class="sub-menu" >
						<li class="{{ $activeSubmodule == 'a1' ? 'active' : '' }}" ><a href="{{ url('/admin') }}" class="waves-effect">En Subasta</a></li>
						<li class="{{ $activeSubmodule == 'a4' ? 'active' : '' }}" ><a href="{{ url('/admin/sales') }}" class="waves-effect">En Venta</a></li>
						<li class="{{ $activeSubmodule == 'a2' ? 'active' : '' }}" ><a href="{{ url('/admin/pujas/0') }}" class="waves-effect">Pujas</a></li>
						<li class="{{ $activeSubmodule == 'a3' ? 'active' : '' }}" ><a href="{{ url('/admin/usuarios') }}" class="waves-effect">Usuarios</a></li>
						<li class="{{ $activeSubmodule == 'a5' ? 'active' : '' }}" ><a href="{{ url('/admin/cupones') }}" class="waves-effect">Cupones</a></li>
					</ul>
				</div>
			</li>
			<li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ $activeModule == 'b' ? 'active' : '' }}">Correo</a>
				<div class="collapsible-body">
					<ul class="sub-menu" >
						<li class="{{ $activeSubmodule == 'b1' ? 'active' : '' }}" ><a href="{{ url('/admin/inbox') }}" class="waves-effect">Inbox</a></li>
					</ul>
				</div>
			</li>
			@foreach ($modules as $key => $value)
				@if (count($value->submodules) > 0)
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ $value->id == $activeModule ? 'active' : '' }}">{{$value->name}}</a>
					<div class="collapsible-body">
						<ul class="sub-menu" >
							@foreach ($value->submodules as $key => $submodules)
								<li class="{{ $submodules->id == $activeSubmodule ? 'active' : '' }}" ><a href="{{ url('/admin/section/'.$submodules->id.'') }}" class="waves-effect">{{$submodules->name}}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</li>
				@else
					<li><a href="{{ url('/admin/section/'.$value->id.'') }}" class="waves-effect">{{$value->name}}</a></li>
				@endif
			@endforeach	
								
			<li style="height: 10em; background-color: #4F4F4F !important; " ></li>			
		</ul>
			<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
		</ul>
		</aside>

<script type="text/javascript">
	$("#changelng").click(function(event) {
		$.blockUI({ message: $('#animationmatrix') });
	});
</script>