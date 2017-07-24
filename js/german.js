var esculturas = function (){
	var bindEvents = function(){
		
		$("#movedown").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#tab2'),
				speed: 1000,
				offset: -133
			});
		});
		$('.scrollspy').scrollSpy({scrollOffset: 135});	
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