@extends("templates.main_digital")
@section("content")
<style>
	.ga-cv-title {
		color: #332f2e;
		font-size: 60px;
		font-weight: bold;
		font-style: italic;
		line-height: normal;
	}

	.ga-cv-title-name {
		color: #c79a73;
		font-weight: bold;
		line-height: normal;
	}

	.ga-cv-description {
		color: #fff;
		font-size: 16px;
		text-align: justify;
		line-height: normal;
	}

	.ga-circle-img {
		border-radius: 50%;
		width: 500px;
		height: 500px;
		max-width: 100%;
		max-height: 100%;
		border: 10px solid #313536;
	}

	.ga-cvartist-bg-left {
		background: linear-gradient(rgba(194,151,118,0.45), rgba(194,151,118,0.45)), url('../media/img/ventas/ventashome.jpg') no-repeat; 
		background-position: 5% 50%;
		background-size: cover;
		height: 100vh;
		min-height: 100%;
	}

	.ga-cvartist-bg-center {
		background: linear-gradient(rgba(45,46,51,0.15), rgba(80,81,84,0.45));
		height: 100vh;
		min-height: 100%; 
	}

	.ga-cvartist-bg-right {
		background: linear-gradient(rgba(45,46,51,0.15), rgba(80,81,84,0.45)); 
		height: 100vh;
		min-height: 100%; 
	}

	.section-block {
	    padding-top: 11rem;
	    padding-bottom: 11rem;
	}

	.hero-content {
	    width: 100%;
	    height: 100%;
	    display: table !important;
	    table-layout: fixed;
	}

	.section-block .hero-content-inner {
	    display: table-cell;
	    vertical-align: middle;
	}

	.section-box {
	    padding: 80px 0;
	}

	.ga-cvartist-item-year {
		color: #c79a73;
	}

	.ga-cvartist-submenu-s ul, li {
		color: #fff;
		list-style-type: disc !important;
	}

	.ga-cvartist-submenu  a {
		color: #c79a73 !important;
		font-size: 14px;
		line-height: normal;
		text-align: left;
	}

	#container {
      width: 100%;
      height: 100vh;
      max-height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      padding: 2rem;
      color: #fff;
      text-align: left;
      -webkit-overflow-scrolling: touch;
    }

    ::-webkit-scrollbar {
	    width: 8px;
	    background: #bfbec2;
	    z-index: 10;
	}

    ::-moz-scrollbar {
	    width: 8px;
	    background: #bfbec2;
	    z-index: 10;
	}

	::-webkit-scrollbar:horizontal {
	    height: 4px;
	}

	::-webkit-scrollbar-track {
	    border-radius: 2px;
	}

	::-webkit-scrollbar-thumb {
	    border-radius: 2px;
	    background: #c79a73;
	}

	::-moz-scrollbar-thumb {
	    border-radius: 2px;
	    background: #c79a73;
	}
	
	@media (max-width: 480px) {
	    ::-webkit-scrollbar {
	    	width: 2px;
		}
	    ::-moz-scrollbar {
	    	width: 2px;
		}
	}
</style>
<div class="fullpages" style="position: relative; background: rgb(25,30,36) no-repeat; height: 100vh; overflow: hidden; background-position: center; background-size: cover; -webkit-align-items: center; align-items: center;">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="row">
		<section class="col s12 m12 l4 ga-cvartist-bg-left">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div class="section-block">
							<div class="hero-content">
								<div class="hero-content-inner">
									<div class="section-box">
										<div class="center-align fontCrimson">
											<img class="responsive-img" alt="Logo German Arzate" src="{{ URL::asset('media/img/german-logo-v2.svg') }}" width="380">
											<p class="ga-cv-title">Mi currículum de artista</p>
										</div> 
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="col s12 m12 l2 ga-cvartist-bg-center">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 center-align">
					<div id="container">
						@foreach ($cvartist as $key => $value)
							@if (count($value->cvdetailItems) > 0)
							<h4 class="ga-cvartist-item-year bold left-align">{{$value->year_event}}</h4>
							<ul class="sub-menu ga-cvartist-submenu-s">
								@foreach ($value->cvdetailItems as $key => $subItems)
									<li class="ga-cvartist-submenu">
										<a href="#" id="{{$subItems->id_cv_artist_detail}}" class="btnItemCV">{{$subItems->description}}</a>
									</li>
								@endforeach
							</ul>
							@endif
						@endforeach
					</div>
					</div>
				</div>
			</div>
		</section>
		<section class="col s12 m12 l6 ga-cvartist-bg-right">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 center-align">
						<!-- <p class="ga-cv-title fontCrimson">CV del Artista</p> -->
					</div>
				</div>
				<div class="row fontCrimson">
					<div class="col s12 m12 l12 center-align">
						<div class="loading"></div>
						<img id="txtCVImg" src="{{ URL::asset('media/img/subasta_esculturas/cv-work-1.jpg') }}" class="responsive-img ga-circle-img">
						<h3 id="txtCVTitle" class="ga-cv-title-name center-align">Galeria de obras</h3>
						<p id="txtCVDescription" class="ga-cv-description truncate-text w90">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sint odit nulla qui maiores recusandae reprehenderit vero, et nesciunt voluptatum necessitatibus harum ullam nobis incidunt corrupti, velit unde eius molestiae!</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$(document).ready(function(){
		var v_path = HOST+"/media/img/cv_artist/";

		$('.btnItemCV').on("click", function(e) {
			e.preventDefault();
		    var v_id = $(this).attr("id");
		    var v_getLastId, v_html = "";
		    if (v_id != "" || v_id != "undefined") {
		        $.ajax({
		            type : "POST",
		            url : HOST+"/ventas/cv-artist/getCVWorksById",
		            data : "id=" + v_id,
		            success : function(data){
						if(data.success == true)
						{
							$.each(data.cvWorksItems, function(data, value){
								$('#txtCVImg').attr('src',v_path+value.filename);
								$('#txtCVTitle').html(value.name);
								$('#txtCVDescription').html(value.description);
							});
						} else if(data.success == false){
							console.log(data.msg);
						}
		            },
		            error: function(){
		            	console.log('Ajax request failed');
		            }
		        });
		    }
		    return false;
		});

	});
</script>
@stop