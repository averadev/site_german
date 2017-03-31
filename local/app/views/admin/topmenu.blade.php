	<div class="navbar-fixed">	
		<nav class="page-topbar top-bar-grey">
			<div class="nav-wrapper top-bar-grey">
			<!--<a href="#!" style="margin-left: 30px;" class="brand-logo">Admin</a>-->
				<div class="container">
					<div class="row">
						<div class="col s12 m10 l6 right">
							<span style="font-size: 1.2rem; margin-left: 0%; " >Bienvenido {{Auth::user()->name}}</span>
							<a href="{{ url('/admin/logout') }}" style=" text-transform: none; font-size: 1.2rem; font-weight: bold; margin-top: 15px;" class="waves-effect btn-flat right "><i class="icon-log_out top-margin right"></i>Cerrar Sesión</a>	
						
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>