var home = function (){
	var bindEvents = function(){

		$('.parallax').parallax();

		$("#topbar li").click(function(event) {
			$(this).addClass("active");
			$(this).siblings().removeClass("active");
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