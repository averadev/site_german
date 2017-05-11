var global = function (){
	var bindEvents = function(){
		$( document ).ajaxStart(function() {
			$.blockUI({ message: $('#animationmatrix') }); 
			setTimeout($.unblockUI, 15000); /*Maximo tiempo de bloqueo 15 segundos*/
		});
		$( document ).ajaxComplete(function() {
			$.unblockUI(); /*Desbloquear*/
		});
		$('select').material_select();


	}
	var onloadExec = function(){
		$(".button-collapse").sideNav();
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var gb = new global();
	gb.init();
});