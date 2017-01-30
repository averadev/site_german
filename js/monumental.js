var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');		
		$('.parallax').parallax();

	}
	$(".appointment").click(function(event) {
		$.smoothScroll({
			scrollTarget: $('#divform'),
			speed: 1500,
		});
	});

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