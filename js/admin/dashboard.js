var dashboard = function (){
	var bindEvents = function(){
	
		$("#module").on("keydown change", function(){
			getSubmodules($(this).val());
		});

	}


	var getSubmodules = function(number){
		$.ajax({
			url: HOST+'/listausuarios/set-card-number',
			type: 'GET',
			dataType: 'json',
			data: {module: number},
		}).done(function(response) {

		}).fail(function(response) {
			console.log(response);
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
	var db = new dashboard();
	db.init();
});