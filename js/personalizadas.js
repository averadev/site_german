var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$("#monumental").click(function(event) {
			window.location.href=HOST+"/servicios/monumental";
		});
		$("#interiores").click(function(event) {
			window.location.href=HOST+"/servicios/interiores";
		});
		$(".appointment").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#formsection'),
				speed: 1500,
			});
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
	var esc = new serviciosextra();
	esc.init();
});