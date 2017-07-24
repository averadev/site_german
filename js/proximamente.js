var comming = function (){
	var bindEvents = function(){
		/*Form Send*/
		$("#sendBtnProx").click(function(event) {
			var validForm = $("#FormProx").valid();
			var formData = $("#FormProx").serialize();
			if(validForm){
				moreInfoForm(formData);
			}
		});
	
	}

	var moreInfoForm = function(formData){
		$("#sendBtnProx").addClass('hide');
		$("#progressdivProx").removeClass('hide');
		$.ajax({
			url: HOST+'/subasta/coming',
			type:'POST',
			dataType: 'json',
			data:formData,
		})
		.done(function(data) {
			if (data.success == true) {
				$("#titleModalMsg").html("¡Mensaje Enviado!");
				$("#showmsgModal").html(data.msg);
				$("#FormProx")[0].reset();
				$('#msgModal').modal('open');
			} 
		})
		.always(function() {
			$("#sendBtnProx").removeClass('hide');
			$("#progressdivProx").addClass('hide');
		});	
	}

	$("#FormProx").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			city: "required",
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
			city: {
				required: "Campo requerido"
			},
			comment: {
				required: "Campo requerido"
			}
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
	
	var onloadExec = function(){
		bindEvents();
		$('#msgModal').modal({
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
	var cs = new comming();
	cs.init();
});