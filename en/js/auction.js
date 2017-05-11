var auctions = function (){
	var bindEvents = function(){
		$('.parallax').parallax();
		$( "#topbar li:eq(7)").addClass('active');

		// Carrusel
		var siema = new Siema ({
			duration: 400,
			easing: 'ease-out'
		});
		// Menu Carrusel
		$( ".touch_mobile" ).click(function() {
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
	var auction_page = new auctions();
	auction_page.init();
});