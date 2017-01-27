var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		$('.button-collapse').sideNav();
		$('.parallax').parallax();
	}
	$("#monumentaltabs li").click(function() {
		var tabnumber = $(this).attr('data');
			switch(tabnumber) {
				case 'tab1':
					$.smoothScroll({
						scrollTarget: $('#section1'),
						speed: 1000,
					});
					break;
				case 'tab2':
					$.smoothScroll({
						scrollTarget: $('#section2'),
						speed: 1200,
					});
					break;
				case 'tab3':
					$.smoothScroll({
						scrollTarget: $('#section3'),
						speed: 1400,
					});
					break;
				case 'tab4':
					$.smoothScroll({
						scrollTarget: $('#section4'),
						speed: 1600,
					});
					break;										
			}
	});
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