var addsale = function (){
	var bindEvents = function(){

	$("#saveAuction").click(function(event) {
		var data = {
			'name'		  : $("#name").val(),
			'description' : $("#description").val(),
			'price' 	  : $("#price").val()
		};
		sendSetAuction(data);
	});

	} /*End BindEvents*/

	var sendSetAuction = function(form){
		$.ajax({
			url: HOST+'/admin/sales/set-sale',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				Materialize.toast(response.msg, 4000,'green');
					setTimeout(function () {
						$.blockUI({ message: $('#animationmatrix') });
						window.location.href=HOST+"/admin/sales/edit/"+response.subasta;
					}, 1000);
			}else{
				 Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {
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
	var sale = new addsale();
	sale.init();
});