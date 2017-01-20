var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$('.parallax').parallax();
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