var esculturas = function (){
	var bindEvents = function(){
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$( "#topbar li:eq(4)").addClass('active');
        
        // Carrusel
        new Siema();
        // Menu Carrusel
        $( ".smooth" ).click(function() {
            
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