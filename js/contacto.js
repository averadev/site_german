var esculturas = function (){
	var bindEvents = function(){
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$( "#topbar li:eq(5)").addClass('active'); 

		$("#sendBtnContact").click(function(event) {
			var validForm = $("#FormContactUS").valid();
			var formData = $("#FormContactUS").serialize();
			if(validForm){
				sendEmail(formData);
			}
			
		});


	} /* End bindEvents */

	var sendEmail = function(formData){
		$("#sendBtnContact").addClass('hide');
		$("#progressdiv").removeClass('hide');
		$.ajax({
			url: HOST+'/contacto/contactomail',
			type:'POST',
			dataType: 'json',
			data:formData,
		})
		.done(function(data) {
			if (data.success == true) {
				$("#titleModalMsg").html("¡Mensaje Enviado!");
				$("#showmsgModal").html(data.msg);
				$("#FormContactUS")[0].reset();
				$('#msgModal').modal('open');
			}
				
			
		}).always(function() {
			$("#progressdiv").addClass('hide');
			$("#sendBtnContact").removeClass('hide');
		});
	}


	$("#FormContactUS").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			company: {
				required: true
			},
			asuntos: {
				required: true
			},
			comment: {
				required: true
			}
		},
		messages: {
			name: {
				required: "Campo requerido"
			},
			email: {
				required: "Campo requerido",
				email: "Ingresa un correo válido"
			},
			company: {
				required: "Campo requerido"
			},
			asuntos: {
				required: "Campo requerido"
			},
			comment: {
				required: "Campo requerido"
			}
		},
		submitHandler:  function(form) {
			form.submit();
		}
	});	

	var onloadExec = function(){
		bindEvents();
		$("#msgModal").modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});		
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var esc = new esculturas();
	esc.init();
});