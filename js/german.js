$(document).ready(function(){ 

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

	$("#movedown").click(function(event) {
		$.smoothScroll({
			scrollTarget: $('#tab2'),
			speed: 1000,
			offset: -135
		});
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


var esculturas = function (){
	var bindEvents = function(){
		$('.parallax').parallax();
		$( "#topbar li:eq(4)").addClass('active');

        // Menu Carrusel
        $( ".smooth" ).click(function() {
            var goto = $(this).attr('goto');
            siema.goTo(goto-1);
        });
	}
	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var esc = new esculturas();
	esc.init();
});