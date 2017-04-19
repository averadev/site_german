var global = function (){
	var bindEvents = function(){
		$( document ).ajaxStart(function() {
			$.blockUI({ message: $('#animationmatrix') }); 
			setTimeout($.unblockUI, 1); /*Maximo tiempo de bloqueo 15 segundos*/
		});
		$( document ).ajaxComplete(function() {
			$.unblockUI(); /*Desbloquear*/
		});
		$('select').material_select();
		/*pathToFiles*/
		var getPathToFile = function(){


			var form = {
				'name'			: "media/img/contacto",
				'nickname'		: $('#nick_bid').val(),
				'email'			: $('#email_bid').val(),
				'amount'		: $('#amount_bid').val(),
				'comment'		: $('#comment_bid').val()
			};
			var paths = [
				"media/img/contacto",
				"../beta_ws/assets/",
				"../tuki_ws/assets/"
			];
			return paths[0];
		}


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