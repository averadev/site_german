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

	.owl-carousel .owl-item img {
		margin: auto;
	}

	.owl-prev, .owl-next {
		position: absolute;
		top: 50%;
		margin-top: -150px;
		width: 50px;
		height: 50px;
		text-align: center;
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
</style>
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
<div class="fullpage" style="position: relative; background: rgb(25,30,36) url('media/img/ventas/proceso_ventas_bg.jpg') no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
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
					<div class="owl-carousel owl-theme">
						@foreach($works as $works)
						<div class="item">
							<div class="col s12 m12 center align work-description margin-ten no-margin-top">
								<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/') }}/{{ $works->filename }}" width="300" height="300" alt="">
								<span class="name center-align fontCrimson">{{ $works->name }}</span>
								<p class="center-col center-align truncate-text w90">{{ $works->detail }}</p>
								<a href="{{ URL::to('/ventas/obra/') }}/{{$works->slug}}" class="btn ba-radius50 ga-melon ga-bold ga-capitalize">Conocer más</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop