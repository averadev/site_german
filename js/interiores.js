var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$("#monumental").click(function(event) {
			window.location.href=HOST+"/servicios/monumental";
		});
		$("#personalizadas").click(function(event) {
			window.location.href=HOST+"/servicios/personalizadas";
		});
		$(".appointment").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#divform'),
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