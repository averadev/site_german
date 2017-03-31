	
	<aside id="left-sidebar-nav">

		<ul id="slide-out" class="side-nav fixed collapsible collapsible-accordion" style="width: 240px; background-color: #4F4F4F;">
		
			<div class="row">
				<!--<div class="col col s4 m4 l4">
					<img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
				</div> -->
				<div class="col s12" style="margin-top: 10%; margin-bottom: 5%; " >
					<div class="col s10 offset-s1">
						<img  style="width: 100%; padding: 20% 10% 20% 10%; background-color: black; " src="{{ URL::asset('media/img/home/logoblanco.png') }}" alt="logo">
					</div>
					
				</div>
			</div>
			<li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ $activeModule == 'a' ? 'active' : '' }}">Subastas Control</a>
				<div class="collapsible-body">
					<ul class="sub-menu" >
						<li class="{{ $activeSubmodule == 'a1' ? 'active' : '' }}" ><a href="{{ url('/admin') }}" class="waves-effect">Subastas</a></li>
						<li class="{{ $activeSubmodule == 'a2' ? 'active' : '' }}" ><a href="{{ url('/admin/pujas/0') }}" class="waves-effect">Pujas</a></li>
						<li class="{{ $activeSubmodule == 'a3' ? 'active' : '' }}" ><a href="{{ url('/admin/usuarios') }}" class="waves-effect">Usuarios</a></li>
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

	  <!-- END LEFT SIDEBAR NAV-->