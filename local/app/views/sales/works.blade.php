@extends("templates.main_digital")
@section("content")
<style>
	.title-works {
		color: #fff;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: normal;
	}

	.testimonial-style2 p {
		color: #fff;
		font-size: 14px;
		margin: 30px 0 20px;
		line-height: normal;
	}
	.testimonial-style2 .name {
		color: #c79a73;
		font-size: 24px;
		display: block;
		width: 100%;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 2px;
	}

	.testimonial-style2 img {
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

	.carousel {
		height: auto !important;
	}
</style>
<div class="fullpage" style="position: relative; background: rgb(25,30,36) url('../media/img/ventas/proceso_ventas_bg.jpg') no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<p class="title-works center-align fontCrimson">Conoce mis obras</p>
					</div>
				</div>
				<div class="row">
					<div class="carousel">
						<a href="#" class="carousel-items">
							<div class="col s12 m12 l4 center align testimonial-style2 margin-ten no-margin-top">
								<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
								<span class="name center-align">Obras</span>
								<p class="center-col center-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
							</div>
						</a>
						<a href="#" class="carousel-items">
							<div class="col s12 m12 l4 center align testimonial-style2 margin-ten no-margin-top">
								<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
								<span class="name center-align">Obras</span>
								<p class="center-col center-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
							</div>
						</a>
						<a href="#" class="carousel-items">
							
							<div class="col s12 m12 l4 center align testimonial-style2 margin-ten no-margin-top">
								<img class="circle" src="{{ URL::asset('media/img/subasta_esculturas/art1.jpg') }}" alt="">
								<span class="name center-align">Obras</span>
								<p class="center-col center-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<a href="#" class="btn ba-radius50 ga-melon ga-bold">Conocer más</a>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop