var comentarios = function (){
	var bindEvents = function(){
		$("#modalcard").click(function(event) {
			$("#titleModal").text('');
			$("#showmessageModal").text("Los datos de la tarjeta a proporcionar no seran almacenados en el sistema, este dato es solo para verificar que el usuario sea válido.");
			$('#messageModal').modal('open');
		});	
		$("#new-user").click(function(event) {
			var formValidation = $( "#new_user_form").valid();
			if(formValidation){
				var formData = $("#new_user_form").serialize();
				set_new_user(formData);
			}
		});

	}/*End bindEvents*/


	/*New user validation*/
	$("#new_user_form").validate({
		rules: {
			name: {
				required: true,
				maxlength: 40
			},
			nickname: {
				required: true,
				maxlength: 20
			},			
			email: {
				required: true,
				valid_email: true,
				maxlength: 50
			},			
			password: {
				required: true,
				maxlength: 500
			},
			password_confirm : {
				required: true,
				equalTo : "#password"
			},				
			card_number: {
				required: true,
				digits: true
			},			
			selectCard: {
				required: true,
			}
		},
		messages: {
			name: {
				required: "Requerido",
				maxlength: "40 caracteres máximo"
			},
			nickname: {
				required: "Requerido",
				maxlength: "20 caracteres máximo"
			},			
			email: {
				required: "Requerido",
				valid_email: "Ingresa un correo válido",
				maxlength: "50 caracteres máximo"
			},
			password: {
				required: "Requerido",
				maxlength: "500 caracteres máximo"
			},				
			card_number: {
				required: "Requerido",
				digits: "Solo numeros"
			},
			password_confirm : {
				required: "Requerido",
				equalTo: "Las contraseñas deben de coincidir"
			},		
			selectCard: {
				required: "Requerido",
			}
		}
	 });

	var set_new_user = function(form){
		$("#new-user").addClass('hide');
		$("#progressdiv").removeClass('hide');
		$.ajax({
			url: HOST+'/usuariopujas/auction-user',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				$("#showmessageModal").text(response.msg);
				$('#mailModal').modal('open');
				$("#new_user_form")[0].reset();
			}else{
				$("#titleModal").text('');
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');
			}

		}).always(function() {
			$("#new-user").removeClass('hide');
			$("#progressdiv").addClass('hide');
		});	
	}	

	var onloadExec = function(){
		bindEvents();
		$('#messageModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});

		$('#mailModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '5%', // Starting top style attribute
			ending_top: '5%', // Ending top style attribute
		});	

	}
	return {
		init:onloadExec
	}

};
$(function(){
	var cmt = new comentarios();
	cmt.init();
});