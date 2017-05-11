$(document).ready(function(){

	var ContactoCSForm = $("#FormContactUS");
	var sendBtn = $("#sendBtnContact");

	sendBtn.click(function(e){
		e.preventDefault();
		var formData = ContactoCSForm.serialize();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#FormContactUS").valid();

		$.ajax({
			url: HOST+'/contacto/contactomail',
			type:'POST',
			dataType: 'json',
			data:formData,
			success: function (data) {

				if (data.success == true) {
					$("#titleModalMsg").html("!Mensaje Enviado!");
					$("#showmsgModal").html(data.msg);
					$("#FormContactUS")[0].reset();
					$('#msgModal').modal('open');
				} else {
					// Form reset
					$("#FormContactUS")[0].reset();
				}
				return false;
			},
			error: function () {
				var msj_error = "Se produjo un problema al comprobar los nombres de los campos";
				console.log("ERROR: ", msj_error);
			}
		});
		return false;
	});

	// Modal Settings
	$("#msgModal").modal({
		dismissible: true, // Modal can be dismissed by clicking outside of the modal
		opacity: 0.5, // Opacity of modal background
		inDuration: 1000, // Transition in duration
		outDuration: 1000, // Transition out duration
		starting_top: '4%', // Starting top style attribute
		ending_top: '25%', // Ending top style attribute
	});

});