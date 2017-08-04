@extends("templates.main_digital")
@section("content")
<div class="fullpage" style="position: relative; background: rgb(25,30,36) url('../media/img/ventas/bg-biography.jpg') no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<article class="col s12 m5 l5 hide-on-small-only hide-on-med-only" style="background: rgb(25,30,36) url('../media/img/ventas/bg-biography-german.jpg') no-repeat; background-position: 50% 50%; background-size: cover; min-height: 100vh; height: 100%;">
		</article>
		<article class="col s12 m7 l7 right fontCrimson">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
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
									<img class="responsive-img hide-on-small-only hide-on-med-only" src="{{ URL::asset('media/img/german-logo-v2.svg') }}" width="200" alt="German Arzate Logo">
								</p>
								<br>
								<div class="ga-social-networks hide-on-small-only hide-on-med-only" style="margin-left: 80%;">
									<ul class="" style="display: inline-flex;">
										<li class="" style="padding: 0 15px;">
											<a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><img class="responsive-img" src="{{ URL::asset('media/img/facebook.svg') }}" width="45"></a>
										</li>
										<li class="">
											<a href="https://twitter.com/germanarzate" target="_blank"><img class="responsive-img" src="{{ URL::asset('media/img/twitter.svg') }}" width="45"></a>
										</li>
									</ul>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>
@stop