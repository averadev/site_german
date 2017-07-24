var comentarios = function (){
	var bindEvents = function(){
	
	}
	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var cmt = new comentarios();
	cmt.init();
});