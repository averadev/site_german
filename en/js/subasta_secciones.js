var subasta_secciones = function (){

	var bindEvents = function(){

		/* ANIMACIONES */
		$( "#topbar li:eq(1)").addClass('active');
		$('.scrollspy').scrollSpy({scrollOffset: 175});
	
		$('.modal_md').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '10%', // Ending top style attribute
		});			

	} /*End BindEvents*/

	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}
};
$(function(){
	var sb = new subasta_secciones();
	sb.init();
});