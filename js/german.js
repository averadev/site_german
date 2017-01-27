var esculturas = function (){
	var bindEvents = function(){
		$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$( "#topbar li:eq(4)").addClass('active');
        
        $('.smooth').click(function() {
            var target = $(this).attr('goto');
            $('html, body').animate({
                scrollTop: $( target ).offset().top
            }, 1000);
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