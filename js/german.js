var esculturas = function (){
	var bindEvents = function(){
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$( "#topbar li:eq(4)").addClass('active');
        
        // Carrusel
        var siema = new Siema({
          duration: 400,
          easing: 'ease-out'
        });
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