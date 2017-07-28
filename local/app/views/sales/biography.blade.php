@extends("templates.main_digital")
@section("content")
<div class="fullpage" style="position: relative; background: rgb(25,30,36) url('../media/img/ventas/bg-biography.jpg') no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<div class="col s12 m5 l5 hide-on-small-only hide-on-med-only" style="background: rgb(25,30,36) url('../media/img/ventas/bg-biography-german.jpg') no-repeat; height: 949px;">
		</div>
		<div class="col s12 m7 l7 right fontCrimson">
			<div class="conts" style="padding-top: 5%;">
				<div class="main-des" style="margin: 0 auto;">
					<p class="ga-title-name center-align">{{ $biography->ger_sec2_txt1 }}</p>
					<p class="ga-subtitle-name center-align">{{ $biography->ger_sec2_txt2 }}</p>
					<br>
					<p class="ga-text-biography">Escultor autodidacta, explorador de la forma desde temprana edad. Sus <br> obras son fruto de la fusión de 2 figuras, elementos o conceptos donde <br> una concepción dual es la constante.</p>
					<br>
					<p class="ga-text-biography">Escultor autodidacta, explorador de la forma desde temprana edad. Sus <br> obras son fruto de la fusión de 2 figuras, elementos o conceptos donde <br> una concepción dual es la constante.</p>
					<br>
					<p class="ga-text-biography">Escultor autodidacta, explorador de la forma desde temprana edad. Sus <br> obras son fruto de la fusión de 2 figuras, elementos o conceptos donde <br> una concepción dual es la constante.</p>
					<br>
					<br>
					<p class="center-align">
						<img class="responsive-img float-center hide-on-small-only hide-on-med-only" src="{{ URL::asset('media/img/header_logo.png') }}" alt="German Arzate Logo">
					</p>
					<br>
					<div class="ga-social-networks hide-on-small-only hide-on-med-only" style="margin-left: 80%;">
						<ul class="" style="display: inline-flex;">
							<li class="" style="padding: 0 15px;">
								<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="">
								<a href="https://twitter.com/germanarzate" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
@stop