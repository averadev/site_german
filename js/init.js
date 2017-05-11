var home = function (){
	var bindEvents = function(){

		$('.parallax').parallax();

		$("#topbar li").click(function(event) {
			$(this).addClass("active");
			$(this).siblings().removeClass("active");
		});

		$("#movedown").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#section1'),
				speed: 1000,
				offset: -50
			});
		});

		$("#showMoreButton").click(function(event) {
			$(".collection").animate({ scrollTop: 0 }, "fast");
			$(".collection").toggleClass("showmore");
		}); 

		$( "#topbar li:eq(0)").addClass('active'); 	

	}
	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var hm = new home();
	hm.init();
});