$(document).ready(function(){

	// scrollspy
	$('body').scrollSpy({target: ".tab", offset: 130});

	$("#tabsNavbar a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function(){
				window.location.hash = hash;
			});
		}
	});

	$(".tab1").click(function(event) {
		window.location.href=HOST+"/subasta#tab1";
	});

	$(".tab2").click(function(event) {
		window.location.href=HOST+"/subasta#tab2";
	});

	$(".tab3").click(function(event) {
		window.location.href=HOST+"/subasta#tab3";
	});

	$(".tab4").click(function(event) {
		window.location.href=HOST+"/subasta#tab4";
	});

	$(".tab5").click(function(event) {
		window.location.href=HOST+"/subasta/comentarios#tab5";
	});

	$(".tab6").click(function(event) {
		window.location.href=HOST+"/subasta/subastas#tab6";
	});

	$(".tab7").click(function(event) {
		window.location.href=HOST+"/subasta/proximamente#tab7";
	});

});


(function($){
	$(window).on("load",function(){

		$("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
			highlightSelector:"#navigation-menu a",
			pageEndSmoothScroll: true,
			forceSingleHighlight:true
		});

	});
})(jQuery);
