$(document).ready(function(){
	/* Owl carousel */
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		items: 3,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
	$(".owl-prev").html('<img src="../../media/img/ventas/sculp_left.svg" width="50">');
	$(".owl-next").html('<img src="../../media/img/ventas/sculp_right.svg" width="50">');

	/* works detail */
	$(".tab1").hide();
	$(".tab2").hide();
	$(".tab3").hide();
	$(".tab4").hide();
	$(".tab5").hide();

	$(".one").click(function(){
		$(".tab1").show();
		$(".tab2").show();
		$(".tab3").show();
		$(".tab4").show();
		$(".tab5").show();
		$("html, body").animate({ scrollTop: $('.tab1').offset().top }, 1000);
		return false;
	});

	$(".two").click(function(){
		$(".tab1").show();
		$(".tab2").show();
		$(".tab3").show();
		$(".tab4").show();
		$(".tab5").show();
		$("html, body").animate({ scrollTop: $('.tab2').offset().top }, 1000);
		return false;
	});

	$(".three").click(function(){
		$(".tab1").show();
		$(".tab2").show();
		$(".tab3").show();
		$(".tab4").show();
		$(".tab5").show();
		$("html, body").animate({ scrollTop: $('.tab3').offset().top }, 1000);
		return false;
	});

	$(".four").click(function(){
		$(".tab1").show();
		$(".tab2").show();
		$(".tab3").show();
		$(".tab4").show();
		$(".tab5").show();
		$("html, body").animate({ scrollTop: $('.tab4').offset().top }, 1000);
		return false;
	});

	$(".five").click(function(){
		$(".tab1").show();
		$(".tab2").show();
		$(".tab3").show();
		$(".tab4").show();
		$(".tab5").show();
		$("html, body").animate({ scrollTop: $('.tab5').offset().top }, 1000);
		return false;
	});

	$(window).scroll(function() {
		if ($(window).scrollTop() <= 30)
		{
			$(".tab1").hide();
			$(".tab2").hide();
			$(".tab3").hide();
			$(".tab4").hide();
			$(".tab5").hide();
			return;
		}
	});

});