@extends("templates.main_digital")
@section("content")
<style>
	.ga-cv-title {
		color: #fff;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: normal;
	}

	.ga-cv-title-year {
		color: #c79a73;
		font-size: 20px;
		font-weight: bold;
		line-height: normal;
	}

	.ga-cv-title-2 {
		color: #fff;
		font-size: 18px;
		line-height: normal;
	}

	.ga-cv-description {
		color: #fff;
		font-size: 16px;
		text-align: justify;
	}
</style>
<div class="fullpages" style="position: relative; background: rgb(25,30,36) no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<article class="col s12 m12 l6" style="background: rgb(25,30,36) url('../media/img/ventas/ventashome.jpg') no-repeat; background-position: 5% 50%; background-size: cover; min-height: 100vh; height: 100%;">
		</article>
		<article class="col s12 m12 l6" style="background: rgb(25,30,36); min-height: 100vh; height: 100%;">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 center-align">
						<p class="ga-cv-title fontCrimson">CV del Artista</p>
					</div>
				</div>
				<div class="row fontCrimson">
					<div class="col s12 m12 l4">
						<p class="ga-cv-title-year">2017</p>
						<p class="ga-cv-title-2">Galeria de obras</p>
						<p class="ga-cv-description truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					</div>
					<div class="col s12 m12 l4">
						<p class="ga-cv-title-year">2017</p>
						<p class="ga-cv-title-2">Galeria de obras</p>
						<p class="ga-cv-description truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					</div>
					<div class="col s12 m12 l4">
						<p class="ga-cv-title-year">2017</p>
						<p class="ga-cv-title-2">Galeria de obras</p>
						<p class="ga-cv-description truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>
@stop