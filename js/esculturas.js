var esculturas = function (){
	var bindEvents = function(){

		$( "#topbar li:eq(1)").addClass('active'); 	

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