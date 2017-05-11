var auction = function (){
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
	var auc = new auction();
	auc.init();
});