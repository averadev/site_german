@extends("templates.main_digital")
@section("content")
<style>
	/* Works */
	.title-work {
		color: #fff;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: normal;
	}

	.work-description p {
		color: #fff;
		font-size: 14px;
		margin: 20px 0 20px;
		line-height: normal;
	}
	.work-description .name {
		color: #c79a73;
		font-size: 24px;
		display: block;
		width: 100%;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 2px;
	}

	.work-description img {
		border-radius: 50%;
		max-width: 300px;
	}

	.margin-ten {
		margin-top: 10% !important;
		margin-bottom: 10% !important;
	}

	.no-margin-top {
		margin-top: 0 !important;
	}

	.w90 {
		width: 90%;
	}

	.carousel {
		height: auto !important;
	}

	.owl-item {
		width: 100% !important;
		height: auto;
	}

	.owl-item img {
		width: 100%;
		height: auto;
	}
	.owl-prev, .owl-next {
		position: absolute;
		top: 50%;
		margin-top: -50px;
		width: 50px;
		height: 50px;
		text-align: center;
		background-color: #fff;
		filter: Alpha(Opacity=50);/*IE7 fix*/
		opacity: 0.5;
	}
	.owl-prev:hover, .owl-next:hover {
		filter: Alpha(Opacity=100);/*IE7 fix*/
		opacity: 1;
	}
	.owl-next {
		right: 0px;
	}
	.owl-controls {
		text-align: center;
	}
	.owl-controls .owl-page {
		display: inline-block;
	}
	.owl-controls .owl-page span {
		background-color: #333;
		-webkit-border-radius: 30px;
		-moz-border-radius: 30px;
		border-radius: 30px;
		display: block;
		height: 12px;
		margin: 5px 7px;
		width: 12px;
		filter: Alpha(Opacity=500);/*IE7 fix*/
		opacity: 0.5;
	}
	.owl-controls .owl-page.active span, .owl-controls .owl-page:hover span {
		filter: Alpha(Opacity=100);/*IE7 fix*/
		opacity: 1;
	}
</style>
<div class="fullpage" style="position: relative; background: rgb(25,30,36) url('../media/img/ventas/proceso_ventas_bg.jpg') no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 no-margin-top">
						<p class="title-work center-align fontCrimson">Conoce mis obras</p>
					</div>
				</div>
				<div class="row">
					<div class="carousel">
						<div class="col s12 m12 l4 center align work-description margin-ten no-margin-top">
							<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
							<span class="name center-align fontCrimson">Obras</span>
							<p class="center-col center-align truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
							<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
						</div>
						<div class="col s12 m12 l4 center align work-description margin-ten no-margin-top">
							<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
							<span class="name center-align fontCrimson">Obras</span>
							<p class="center-col center-align truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
							<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
						</div>
						<div class="col s12 m12 l4 center align work-description margin-ten no-margin-top">
							<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
							<span class="name center-align fontCrimson">Obras</span>
							<p class="center-col center-align truncate-text w90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
							<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop