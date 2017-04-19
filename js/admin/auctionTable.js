var global = function (){
	var bindEvents = function(){
		$(".update-auction-status").click(function(event) {
			 $('.fixed-action-btn').closeFAB();
		});
		$(".container").click(function(event) {
			$('.fixed-action-btn').closeFAB();
		});
		$(".statusAction").click(function(event) {
			$.blockUI({ message: $('#animationmatrix') });
		});

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