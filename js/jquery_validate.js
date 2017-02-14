$("#FormCS").validate({
	rules: {
		name: {
			required: true
		},
		email: {
			required: true,
			email:true
		},
		city: "required",
		comment: {
			required: true
		}
	},
	messages: {
		name: {
			required: "Ingresa tu nombre"
		},
		email: {
			required: "Ingresa tú correo electronico"
		},
		city: {
			required: "Ingresa una ciudad"
		},
		comment: {
			required: "Ingresa un comentario"
		}
	},
	errorElement : 'div',
	errorPlacement: function(error, element) {
		var placement = $(element).data('error');
		if (placement) {
			$(placement).append(error)
		} else {
			error.insertAfter(element);
		}
	}
});