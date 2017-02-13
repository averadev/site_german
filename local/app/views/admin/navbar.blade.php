	
	<aside id="left-sidebar-nav">
		<ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y" style="width: 240px;">
			<li class="user-details grey darken-4">
			<div class="row">
				<!--<div class="col col s4 m4 l4">
					<img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
				</div> -->
				<div class="col s9">
					<a style="margin-bottom: 2rem;" class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Usuario<i class="material-icons">arrow_drop_down</i></a><ul id="profile-dropdown" class="dropdown-content" style="width: 128px; position: absolute; top: 57px; left: 101.25px; opacity: 1; display: none;">
						<li>
							<a href="#"><i class="material-icons">settings</i> Config</a>
						</li>
						<li>
							<a href="{{ url('/admin/logout') }}"><i class="material-icons">power_settings_new</i> Logout</a>
						</li>
					</ul>
					<p class="user-roal"></p>
				</div>
			</div>
			</li>
				<li class="bold"><a href="about.html" class="waves-effect waves-teal">Dashboard</a></li>
				<li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Galeria</a></li>
				<li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Subasta</a></li>
				<li style="height: 10em;" ></li>			
			</ul>
			<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
		</ul>
		</aside>

	  <!-- END LEFT SIDEBAR NAV-->