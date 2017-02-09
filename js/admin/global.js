var global = function (){
	var bindEvents = function(){
		$('select').material_select();

	}
	var onloadExec = function(){
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