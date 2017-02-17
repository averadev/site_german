$(document).ready(function(){
	var ContactoCSForm = $("#FormCS");
	var sendBtn = $("#sendBtn");
	var msg_success = $("#msg_success");

	ContactoCSForm.submit(function(e){
		e.preventDefault();
		var formData = ContactoCSForm.serialize();

		$.ajax({
			url: HOST +'/subasta/coming',
			type:'POST',
			dataType: 'json',
			data:formData,
			success: function (data) {
				if (data.success === true) {
					formData.submit();
					msj_success.html(data.messsage);
					return false;
				} else {
					console.log(data.errors);
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
});